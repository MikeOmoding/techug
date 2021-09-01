<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    // Show about page

    public function about()
    {
        return view('pages.about');
    }


    // Show blog page

    public function blog()
    {
        return view('pages.blog');
    }

    // Show services page

    public function services()
    {
        return view('pages.services');
    }

    /// Show internship page
    public function internship()
    {
        $origin = $_GET['origin'];

        $originPageValue = originPage($origin);

        return view('pages.internship',['origin' => $origin,'originPageValue' => $originPageValue]);
    }

    // Show volunteer paage
    public function volunteer()
    {
        return view('pages.volunteer');
    }

    // Show contact page

    public function contact()
    {
        return view('pages.contact');
    }

    // Show gallery page

    public function gallery()
    {
        return view('pages.gallery');
    }


    // Show Donate page

    public function donate()
    {
        return view('pages.donate');
    }
}
