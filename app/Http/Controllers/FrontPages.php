<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPages extends Controller
{
    public function home(){
        $title = "MediPlus Home Page";
        return view('home', compact('title'));
    }


    public function contactUs(){
        $title = "Contact Us";
        return view('contactUs', compact('title'));
    }
    public function myVal(){

    session()->put('test', 'First first session');
    return 'Session Created';
    }
}
