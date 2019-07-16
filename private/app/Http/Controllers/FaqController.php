<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function index()
    {
        return 'this should be faq page';
    }

    public function show($id)
    {
        return 'this should be faq show page';

    }
}
