<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adietController extends Controller
{
    public function About(){
        return view('Page.about');
    }

    public function Services(){
        return view('Page.services');
    }
}
