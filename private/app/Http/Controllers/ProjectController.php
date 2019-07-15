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

    public function projects($category_id = null)
    {
        $categories = Category::where('status', 1)->where('type', 'project')->get();

        $project_query = Project::where('status', 1)->orderBy('order', 'asc');
        if ($category_id) {
            $project_query->where('category_id', $category_id);
        }
        $projects = $project_query->paginate(16);

        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->take(10)->get();

        return view('main_site.pages.projects.projects')->with(['categories' => $categories, 'projects' => $projects, 'faqs' => $faqs, 'subPage' => 'sub_page']);
    }

    public function show($id)
    {
        $project = Project::with('gallery.gallery_items')->where('type', 'project')->where('status', 1)->findOrFail($id);
        $project->attributes = json_decode($project->attributes, true);
        $categories = Category::where('status', 1)->where('type', 'project')->with(['projects' => function ($query) {
            $query->where('status', 1);
            $query->orderBy('order', 'asc');
            $query->take(8);
        }])->orderBy('order', 'asc')->take(4)->get();
        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->take(10)->get();
        return view('main_site.pages.projects.projects_show')->with(['categories' => $categories, 'project' => $project, 'faqs' => $faqs, 'subPage' => 'sub_page']);
    }
}
