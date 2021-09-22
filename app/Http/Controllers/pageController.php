<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function products()
    {
        return view('pages.products');
    }
    public function team()
    {
        return view('pages.team');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    
}
