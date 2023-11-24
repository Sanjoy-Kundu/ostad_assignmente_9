<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function home(){
        return view('Frontend.pages.Home');
    }

    function about(){
        return view('Frontend.pages.About');
    }

    function projects(){
        return view('Frontend.pages.Projects');
    }

    function contact(){
        return view('Frontend.pages.Contact');
    }
}
