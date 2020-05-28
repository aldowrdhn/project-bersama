<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aldowardanaController extends Controller
{
    public function Home(){
        return view('index');
    }
}