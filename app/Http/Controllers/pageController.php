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
        $product=[
            "name"=>"Iphone 11",
            "price"=>"$499"
        ];
        return view('pages.products')->with('data',$product);
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
