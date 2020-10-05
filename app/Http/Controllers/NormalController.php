<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class NormalController extends Controller
{
    public function index (){
       $emp = Employee::all();
       return view ('home', compact('emp'));
    }

    public function show($id){
        $emps = Employee::findOrFail($id);
        return view ('show', compact ('emps'));
    }
}