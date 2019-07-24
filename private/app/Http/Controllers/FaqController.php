<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function index()
    {
        $faqs=Faq::where('status',1)->orderBy('order','asc')->take(16)->get();

        return view('main_site.pages.faqs_index')
            ->with(['faqs' => $faqs, 'sub_page' => 'subPage']);
    }
}
