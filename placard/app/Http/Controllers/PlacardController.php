<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\log;
class PlacardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placardList = log::orderby("updated_at","desc")->limit(3)->get();
        $placardList[0]->values = substr($placardList[0]->value,0,6)."....";
        $placardList[1]->values = substr($placardList[1]->value,0,6)."....";
        $placardList[2]->values = substr($placardList[2]->value,0,6)."....";
        return view('home.index', compact('placardList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("placard.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emp = new log();
        if($request->okOrCancel == "add" && $request->comment != ''){
        $emp->value = $request->comment;
        $emp->save();
        return redirect("/placard");
        }
        return redirect("/placard");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = log::find($id);
        return view('placard.edit', compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emp = log::find($id);
        if($request->comment != "" && $request->comment != $emp->value){
            $emp->value = $request->comment;
            $emp->save();
            return redirect("/placard");
        }elseif($request->comment == $emp->value){
            dd('內容相同');
        }else{
            dd('沒輸入內容');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = log::find($id);
        $emp->delete();
        return redirect("/placard");
    }
    function content($id){
        $emp = log::find($id);
        return view('placard.content', compact('emp'));
    }
}
