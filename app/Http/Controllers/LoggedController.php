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

    public function edit($id){
        $emp = Employee::findOrFail($id);
        $loc = Location::all();


        return view('edit-emp',compact('emp', 'loc'));
    }

    public function update (Request $request, $id){
        $data = $request -> all();
        $emp = Employee::findOrFail($id);
        $emp ->update($data);

        // AL POSTO DI $emp ->update($data);
        // POSSO SCRIVERE COSI.. USANDO NOI ARRAY: 

        // $emp -> update([
        //     "name"=> $request ->input('name'),
        //     "lastname"=> $request ->input('lastname'),
        //     "location_id"=> $request ->input('location_id')
        // ]);
        

        return redirect() -> route('emp-show' , $id);
       
    }
}