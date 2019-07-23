<?php

namespace App\Http\Controllers;

use App\Category;
use App\Content;
use App\Faq;

class ContentController extends Controller
{

    public function newsShow($id)
    {
        return $this->show($id, 'news');
    }

    public function articleShow($id)
    {
        return $this->show($id, 'article');
    }

    public function show($id, $type)
    {
        $content = Content::with('gallery.gallery_items')->where('type', $type)->where('status', 1)->findOrFail($id);
        $categories = Category::where('status', 1)->where('type', 'project')->with(['projects' => function ($query) {
            $query->where('status', 1);
            $query->orderBy('order', 'asc');
            $query->take(8);
        }])->orderBy('order', 'asc')->take(4)->get();
        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->take(10)->get();
        return view('main_site.pages.content.content_show')
            ->with(['categories' => $categories,
                'content' => $content, 'faqs' => $faqs,
                'sub_page' => 'subPage',
                'type' => $type,
                'page_title_description' => $this->getText($type)
            ]);
    }

    public function news($category_id = null)
    {
        return $this->contents('news', $category_id);
    }

    public function articles($category_id = null)
    {
        return $this->contents('articles', $category_id);
    }

    public function contents($type, $category_id = null)
    {
        $categories = Category::where('status', 1)->where('type', $type)->get();

        $query = Content::where('status', 1)->where('type', $type)->orderBy('order', 'asc');
        if ($category_id) {
            $query->where('category_id', $category_id);
        }
        $contents = $query->paginate(16);

        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->take(10)->get();

        return view('main_site.pages.content.contents')
            ->with(['categories' => $categories, 'contents' => $contents,
                'faqs' => $faqs, 'sub_page' => 'subPage',
                'type' => $type,
                'page_title_description' => $this->getText($type)]);
    }

    public function getText($type)
    {
        $title = 'مقالات';
        $descriptions = 'تعرف على الأخبار والإعلانات والعقود الجديدة وعملية تنفيذ المشاريع';
        if ($type == 'news') {
            $title = 'الاخبار';
            $descriptions = 'تعرف على الأخبار والإعلانات والعقود الجديدة وعملية تنفيذ المشاريع';
        }
        return ['title' => $title, 'descriptions' => $descriptions];
    }

}