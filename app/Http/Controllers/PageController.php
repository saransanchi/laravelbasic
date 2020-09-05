<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
    
            return view('pages.home',['company' => 'SK-Tech Solution']);
        
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function teams(){
        return view('pages.teams');
    }
}
