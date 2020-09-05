<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        date_default_timezone_set('Asia/Kolkata');
        $hour=date('G');
            $hour=12;
            return view('pages.home',['company' => 'SK-Tech Solution','hour'=>$hour]);
        
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function teams(){
        return view(
            'pages.teams',[
            'teamMembers'=> 60]
            
    );
    }
}
