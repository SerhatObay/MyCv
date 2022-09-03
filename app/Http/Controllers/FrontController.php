<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function resume(){
        return view('frontend.resume');
    }
    public function portfolio(){
        return view('frontend.portfolio');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function contact(){
        return view('frontend.contact');
    }
}
