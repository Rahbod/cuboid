<?php
/**
 * Created by PhpStorm.
 * User: mujtaba
 * Date: 7/15/2019
 * Time: 7:39 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function show()
    {
        return view('main_site.pages.contact_us')->with('sub_page','subPage');
    }

    public function store(Request $request)
    {
        dd($request->all());

    }
}