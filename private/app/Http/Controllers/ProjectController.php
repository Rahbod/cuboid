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
        $model_name = '\\App\\' . ucfirst($type);
        $categories = Category::where('status', 1)->where('type', $type)->get();

        $query = $model_name::where('status', 1)->where('type', $type)->orderBy('order', 'asc');
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

    }

    public function show($id, $type)
    {
        $model_name = '\\App\\' . ucfirst($type);

        $project = $model_name::with('gallery.gallery_items')->where('type', $type)->where('status', 1)->findOrFail($id);
//        dd($project);
        $project->attributes = json_decode($project->attributes, true);

//        $categories = Category::where('status', 1)->where('type', 'project')->with(['projects' => function ($query) use ($project) {
//            $query->where('status', 1);
//            $query->orderBy('order', 'asc');
//            $query->take(8);
//        }])->orderBy('order', 'asc')->take(4)->get()->toArray();

//        $random_number = array_rand($categories);
//        $category = $categories[$random_number];
////        dd($category);
//        $project_random_number = array_rand($category['projects']);
//        $next_project = $category['projects'][$project_random_number];


        $ids = $model_name::where('status', 1)->orderBy('order', 'asc')->where('type', $type)->get()->pluck('id')->toArray();
        $counts = $model_name::where('status', 1)->orderBy('order', 'asc')->where('type', $type)->get()->count();

        $next_project = $model_name::where('status', 1)->orderBy('order', 'asc')->where('type', $type)->findOrFail($ids[rand(0, $counts -1)]);
        $related_projects = Project::where('status', 1)->orderBy('order', 'asc')->where('type', $type)->where('category_id', $project->category_id)->get();

        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->take(10)->get();
        return view('main_site.pages.projects.projects_show')
            ->with(
                [
                    'related_projects' => $related_projects,
                    'next_project' => $next_project,
                    'project' => $project, 'faqs' => $faqs,
                    'sub_page' => 'subPage',
                    'type' => $type,
                    'page_title_description' => $this->getText($type)
                ]);
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
        $descriptions = 'بما يتوافق مع طول فترة ونوع نظام الصك ، ينطبق سقف الحشيش بأربعة قوالب مع المواصفات المذكورة في الجدول أدناه. فيما يتعلق بالهندسة المعمارية ونظام كل مشروع ، يوفر قسم التصميم في تصميم Cybwhite الخيار الأفضل لأصحاب العمل المقولبين.';

        if ($type == 'project') {
            $title = 'المشاريع المنجزة';
            $descriptions = 'منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العديد من المباني الخرسانية والمعدنية مع المباني السكنية والتجارية والفنادق والمكتبات والمسجد والصناعي والمعارض ومواقف السيارات والمحطات.';
        }
        return ['title' => $title, 'descriptions' => $descriptions];
    }


}
