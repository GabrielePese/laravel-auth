<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoggedController extends Controller
{
    
    //   Create a new controller instance.
    
     
    public function __construct()
    {
        $this->middleware('auth');
    }

    // /
    //  * Show the application dashboard.
    //  *
    //  @return \Illuminate\Contracts\Support\Renderable
    //  */
    public function destroy($id)
    {
        $emp = Employee::findOrFail($id);
        $emp -> delete();
        return redirect() -> route('index');
    }

    public function create(){
        $loc = Location::all();
        return view ('create-emp', compact('loc'));
    }
    public function store (Request $request){
        $data = $request -> all();
        Employee::create($data);
        return redirect() -> route('index');
        
    }
}