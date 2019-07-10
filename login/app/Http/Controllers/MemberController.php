<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    function login()
    {
        return view("member.login");
    }
    function postLogin(Request $request)
    {
        $request->session()->put('user',$request->txtUserName ,'guest');
        $name =  session('user');
       
        return view("home.index",compact('name'));
    }
}
