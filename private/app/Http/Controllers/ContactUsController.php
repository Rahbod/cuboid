<?php
/**
 * Created by PhpStorm.
 * User: mujtaba
 * Date: 7/15/2019
 * Time: 7:39 PM
 */

namespace App\Http\Controllers;

use App\Category;
use App\Faq;
use App\Project;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function show()
    {
        $categories = Category::where('status', 1)->where('type', 'project')->with(['projects' => function ($query) {
            $query->where('status', 1);
            $query->orderBy('order', 'asc');
            $query->take(8);
        }])->orderBy('order', 'asc')->take(4)->get();
        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->take(10)->get();

        return view('main_site.pages.contact_us')->with(['categories' => $categories, 'faqs' => $faqs, 'sub_page' => 'subPage']);;
    }

    public function store(Request $request)
    {
        dd($request->all());

    }
}