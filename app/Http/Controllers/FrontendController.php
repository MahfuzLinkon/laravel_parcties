<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function welcome(){
        $title = "Welcome ";

        return view('welcome', compact('title'));
    }

    public function contact(){
        $title = "Contact Us";

        return view('contact', compact('title'));
    }

    public function about(){
        $about = "Know More about us" ;

        return view('about', compact('about'));
    }


}
