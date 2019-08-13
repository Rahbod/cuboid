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

        $next_content = Content::where('status', 1)->where('type', $type)
            ->where('category_id',$content->category_id)->orderBy('id','asc')
            ->where('id', '>', $content->id)->first();

        if (!$next_content) {
            $min_model = Content::where('status', 1)->where('type', $type)
                ->where('category_id',$content->category_id)->orderBy('id','asc')
                ->where('id', '>', 0)->min('id');
            $next_content=Content::findOrFail($min_model);
        }

        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->take(10)->get();
        return view('main_site.pages.content.content_show')
            ->with(['categories' => $categories,
                'next_content' => $next_content,
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
        $categories = Category::where('status', 1)->where('type', $type)->whereHas('contents')->get();

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
        $descriptions = 'تعرف على مقالة والإعلانات والعقود الجديدة';
        if ($type == 'news') {
            $title = 'الأخبار';
            $descriptions = 'تعرف على الأخبار والإعلانات والعقود الجديدة';
        }
        return ['title' => $title, 'descriptions' => $descriptions];
    }

}