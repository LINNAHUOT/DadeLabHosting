<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class crudPatient extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::latest()->paginate(5);

        return view('adminPages.patients',compact('patients'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.add-patient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            'email' => $request['email'],

            'password' => Hash::make($request['password']),
            'dob'   => $request['dob'],
            'gender' => $request['gender'],
            'phonenumber' => $request['phonenumber'],
            'bloodType' => $request['bloodType'],
        ]);

        return redirect()->route('patients.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('adminPages.patients',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('adminPages.edit-patient',compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
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

        User::find($patient)->update([
            'role' => 'patient',
            'name' => $request['name'],
            'email' => $request['email'],
            //'password' => Hash::make($request['password']),
        ]);
        Patient::update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'dob'   => $request['dob'],
            'gender' => $request['gender'],
            'phonenumber' => $request['phonenumber'],
            'bloodType' => $request['bloodType'],
        ]);

        return redirect()->route('patients.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index')
                        ->with('success','Patient deleted successfully');
    }
}
