<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.home');
    }

    public function aboutus(){
        return view('frontend.about-us');
    }

    public function Service(){
        return view('frontend.service');
    }

    public function Contact(){
        return view('frontend.contact');
    }

    public function Collaboration(){
        return view('frontend.Collaboration');
    }
}
