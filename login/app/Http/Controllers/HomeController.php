<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $name = session()->get('user', 'guest');

        return view("home.index",compact('name'));
    }
    function member(){
        if(session()->get('user', 'guest') != 'guest'){
            return view("home.member");
        }
        return redirect("/home/index");
    }
    
}
