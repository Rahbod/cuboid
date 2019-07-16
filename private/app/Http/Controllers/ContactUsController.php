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
use App\Feedback;
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
        $data = $this->validate($request, [
            'name' => 'required',
            'relevant_section' => 'required',
            'email' => 'required',
            'content' => 'required',
        ]);


        $data = array_merge(['archive' => 0], $data);

        $new_feedback = Feedback::create($data);

        if ($new_feedback)
            return response()->json(['title' => 'نجاح', 'message' => 'تم تسجيل معلوماتك بنجاح']);
        return response()->json(['title' => 'خطا', 'message' => 'خطایی رخ داده است.لطفا بعدا مجددا امتحان بفرمایید.']);


    }
}