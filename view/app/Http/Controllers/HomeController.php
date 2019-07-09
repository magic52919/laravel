<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
         $scoreList = [100, 98, 50, 90, 95];
        $userName = "Chien";
        $lines = "line1<br>line2<br>line3";
        $cityId = "4";
        // $scoreList1 = [100=>['red'], 98=>['red'], 50=>['blue'], 90=>['red'], 95=>['red']];
        $viewModel = compact(
            "scoreList", 
            "userName", 
            "lines", 
            "cityId",
        "scoreList1");
        // dd($viewModel);
          return view("home.index", $viewModel);
        //  dd($scoreList1);
    }
}
