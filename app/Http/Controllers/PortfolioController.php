<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function about(){
        return view('frontend.about');
    }
    public function skills(){
        return view('frontend.skills');
    }
    public function contact(){
        return view('frontend.contact');
    }
}
