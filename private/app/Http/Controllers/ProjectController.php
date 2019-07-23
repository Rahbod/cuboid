<?php

namespace App\Http\Controllers;

use App\Category;
use App\Faq;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /* Note :
     *the $sub_page is for other pages except home to change the small header position to static
     */

    public function contents($type, $category_id = null)
    {
        $categories = Category::where('status', 1)->where('type', $type)->get();

        $query = Project::where('status', 1)->where('type', $type)->orderBy('order', 'asc');
        if ($category_id) {
            $query->where('category_id', $category_id);
        }
        $contents = $query->paginate(16);

        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->take(10)->get();

        return view('main_site.pages.projects.projects')
            ->with(['categories' => $categories, 'projects' => $contents,
                'faqs' => $faqs, 'sub_page' => 'subPage',
                'type' => $type,
                'page_title_description' => $this->getText($type)]);


//        $project_query = Project::where('status', 1)->orderBy('order', 'asc');
//        if ($category_id) {
//            $project_query->where('category_id', $category_id);
//        }
//        $projects = $project_query->paginate(16);
//
//        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->take(10)->get();
//
//        return view('main_site.pages.projects.projects')
//            ->with(['categories' => $categories, 'projects' => $projects, 'faqs' => $faqs, 'sub_page' => 'subPage']);

    }
    public function show($id, $type)
    {
        $project = Project::with('gallery.gallery_items')->where('type', $type)->where('status', 1)->findOrFail($id);
        $project->attributes = json_decode($project->attributes, true);

        $categories = Category::where('status', 1)->where('type', $type)->with(['projects' => function ($query) {
            $query->where('status', 1);
            $query->orderBy('order', 'asc');
            $query->take(8);
        }])->orderBy('order', 'asc')->take(4)->get();
        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->take(10)->get();
        return view('main_site.pages.projects.projects_show')
            ->with(['categories' => $categories,
                'project' => $project, 'faqs' => $faqs,
                'sub_page' => 'subPage',
                'type' => $type,
                'page_title_description' => $this->getText($type)
            ]);

//        $project = Project::with('gallery.gallery_items')->where('type', 'project')->where('status', 1)->findOrFail($id);
//        $project->attributes = json_decode($project->attributes, true);
//        $categories = Category::where('status', 1)->where('type', 'project')->with(['projects' => function ($query) {
//            $query->where('status', 1);
//            $query->orderBy('order', 'asc');
//            $query->take(8);
//        }])->orderBy('order', 'asc')->take(4)->get();
//        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->take(10)->get();
//        return view('main_site.pages.projects.projects_show')->with(
//            ['categories' => $categories,
//                'project' => $project,
//                'faqs' => $faqs, 'sub_page' => 'subPage']);
    }


    public function projects($category_id = null)
    {
        return $this->contents('project', $category_id);
    }
    public function products($category_id = null)
    {
        return $this->contents('product', $category_id);
    }

    public function productShow($id)
    {
        return $this->show($id, 'product');
    }
    public function projectShow($id)
    {
        return $this->show($id, 'project');
    }

    public function getText($type)
    {
        $title = 'المنتجات';
        $descriptions = 'المنتجات بما يتوافق مع طول فترة ونوع نظام الصك ، ينطبق سقف الحش بما يتوافق مع طول فترة ونوع نظام الصك ، ينطبق سقف الحش';

        if ($type == 'project') {
            $title = 'المشاریع';
            $descriptions = 'المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد';
        }
        return ['title' => $title, 'descriptions' => $descriptions];
    }


}
