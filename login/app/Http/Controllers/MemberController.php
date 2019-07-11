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
        $request->session()->put('user',$request->txtUserName);
        return redirect("/home/index");
    }
    function logout()
    {
        session()->forget('user');
        return redirect("/home/index");
    }
}
