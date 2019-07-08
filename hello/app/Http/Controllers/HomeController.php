<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index() {
        return view('home.index');
    }
    function sayHello(Request $request) {
        $who=$request->userName;
        $t=3;
        
        // dd($request);
        // dd($request->userName);
        // dd($request->input("userName"));
        // dd($request->userName);
        // return view("home.hello",["who" => $request->userName]);
        // return view("home.hello")->withwho($request->userName)->with('t',$t);
return view("home.hello",compact('who','t'));
    }
}
