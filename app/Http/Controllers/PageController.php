<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{
    public function index()
    {
        return view('pages.index');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function partners()
    {
        return view('pages.partners');
    }
}
