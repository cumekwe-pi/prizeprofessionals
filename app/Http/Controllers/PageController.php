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

    public function requestQuote()
    {
        return view('pages.request-quote');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function claimPrize()
    {
        return view('pages.claim-prize');
    }

    public function prizeSourcing()
    {
        return view('pages.prize-sourcing');
    }

    public function prizeFulfillment()
    {
        return view('pages.prize-fulfillment');
    }

    public function winnerManagement()
    {
        return view('pages.winner-management');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function cookies()
    {
        return view('pages.cookies');
    }

    public function about()
    {
        return view('pages.about');
    }
}
