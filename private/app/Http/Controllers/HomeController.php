<?php

namespace App\Http\Controllers;

use App\Category;
use App\Content;
use App\Faq;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
//        dd('hi');
        $about_us=config('system.about_us.introduction');
        $categories=Category::where('status',1)->where('type','project')->with(['projects'=>function($query){
            $query->where('status',1);
            $query->orderBy('order','asc');
            $query->take(8);
        }])->orderBy('order','asc')->take(4)->get();
        $news=Content::where('type','news')->where('status',1)->where(function($query){
            $query->where('published_at',null);
            $query->orWhere('published_at', '<=', Carbon::now());
        })->take(10)->orderBy('order','desc')->get();

        $faqs=Faq::where('status',1)->orderBy('order','asc')->take(10)->get();
//        $menus=Menu::where('parent_id',null)->whrere('status',1)->with(['children'=>function($query){
//            $query->where('status',1);
//            $query->orderBy('order','asc');
//        }])->orderBy('order','asc')->get();
//        dd($about_us,$categories,$news);
        return view('main_site.pages.home')->with(['about_us'=>$about_us,'categories'=>$categories,'news'=>$news,'faqs'=>$faqs]);
    }
}
