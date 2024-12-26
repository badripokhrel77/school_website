<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function home()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function courses()
    {
        return view('frontend.courses');
    }
    public function team()
    {
        return view('frontend.team');
    }
    public function testimonial()
    {
        return view('frontend.testimonial');
    }


}