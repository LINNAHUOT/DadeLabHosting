<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Appointments;
use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function store(Request $request)
    {
         $request->validate([
            'patientName' => 'required',
            'age' => 'required',
            'doctorName' => 'required',
            'department' => 'required',
            'appointDate' => 'required',
            'appointTime' => 'required',
            'satus' => 'required',
            'symptom' => 'required',
        ]);

        //Appointment::create($request->all());
       Appointment::store([
            'patientName' => $request['patientName'],
            'age' => $request['patientName'],
            'doctorName' => $request['doctorName'],
            'department' => $request['department'],
            'appointDate' => $request['appointDate'],
            'satus' => $request['satus'],
            'symptom' => $request['symptom'],

        ]);

        return redirect()->back()
                        ->with('success','Post created successfully.');
    }


  /* public function createAppointment(Request $request)
    {


        $appointments = new Appointment();

        $appointments ->id ;
        $appointments ->patientName = $request->input(' patientname');
        $appointments ->age = $request-> age->input(' age');
        $appointments ->doctorName = $request-> input('doctorname');
        $appointments ->department= $request-> input('department');;
        $appointments ->appointDate = $request-> input('appointDate');
        $appointments ->appointTime = $request->input('appointTime');
        $appointments ->satus = $request->input('satus');
        $appointments ->symptom = $request->input('symptom');


        $appointments->save();
        return back()->with('appointment_created','Appointment was created sucessful!');
    }*/



}
