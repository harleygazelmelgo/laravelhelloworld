<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloworldcontroller extends Controller
{
    function home () {
        return view('home');
    }

    function aboutUs () {
        return view('aboutUs');
    }

    function contactUs () {
        return view('contactUs');
    }


}
