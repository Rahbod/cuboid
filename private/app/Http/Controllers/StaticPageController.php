<?php

namespace App\Http\Controllers;

use App\Category;
use App\Faq;
use App\Page;
use App\Project;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{

    public function show($id)
    {
        $page = Page::findOrFail($id);

        $project = Project::with('gallery.gallery_items')->where('type', 'project')->where('status', 1)->findOrFail($id);
        $project->attributes = json_decode($project->attributes, true);
        $categories = Category::where('status', 1)->where('type', 'project')->whereHas('projects')->with(['projects' => function ($query) {
            $query->where('status', 1);
            $query->orderBy('order', 'asc');
            $query->take(8);
        }])->orderBy('order', 'asc')->take(4)->get();
        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->take(10)->get();

        return view('main_site.pages.static_pages')->with(
            ['categories' => $categories,
                'project' => $project,
                'page' => $page,
                'faqs' => $faqs, 'sub_page' => 'subPage']);

    }
}
