<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class patients extends Controller
{
    public function index()
    {
        return view('adminPages.patients');
    }
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phonenumber' => 'required',
            'bloodType' => 'required',
        ]);
        //dd($request->all());

        User::create([
            'role' => 'patient',
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        Patient::create([
            'name' => $request['name'],
            'password' => Hash::make($request['password']),
            'dob'   => $request['dob'],
            'gender' => $request['gender'],
            'phonenumber' => $request['phonenumber'],
            'bloodType' => $request['bloodType'],
        ]);    

        return redirect()->back()
                        ->with('success','Product created successfully.');
    }
    public function retrieve (Patient $patient){
        return view('adminPages.patients',compact('patient'));

        // $users = DB::select('select * from patient');
        // return view('adminPages.patient',['patient'=>$patient]);
    }

    
  


}
