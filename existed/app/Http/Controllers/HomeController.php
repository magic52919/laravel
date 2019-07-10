<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Employee;
class HomeController extends Controller
{
    function index() {
        // $d = Department::find(1);
        // return $d->departmentName;

        // $d = Department::find(1)->employees();
        // dd($d->first()->firstName);
        
        // $emp = Employee::find(1);
        // dd($emp->firstName);

        // $d = Employee::find(1)->department();
        // dd($d->first()->departmentName);

        $employeeList = Employee::all();
        //dd($employeeList[0]->department());
        return view("home.index", compact('employeeList'));
    }
    function show($id){
        $employee = Employee::find($id);
        //  dd($employee);
        //  dd($employee->department());
        
        return view("home.employeeDetails", compact('employee'));
    }
}
