<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * shows home page view
     * 
     * return view
     */
    public function home(){
        return view('home');
    }

    /**
     * shows about page
     */
    public function about(){
        return view('about');
    }

    /**
     * shows contact page
     */
    public function contact(){
        return view('contact');
    }

}
