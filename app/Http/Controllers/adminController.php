<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class adminController extends Controller
{
    use RegistersUsers;

    public function admin(){
        return view('adminPages.dashboardAdmin');
    }
    public function viewAppointment(){
        return view('adminPages.appointments');
    }
    public function addAppointment(){

        return view('adminPages.add-appointment');
    }
    // public function viewPatient(){
    //     return view('adminPages.patients');
    // }
    public function addPatient(){
        
        return view('adminPages.add-patient');
    }



    public function createPatient(Request $request){
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


    public function store(Request $request){

        $user                = new User();

        $user->role       = 'patient';
        $user->name        = $request->get('name');
        $user->password     = $request->get('password');
        $user->gender     = $request->get('gender');
        $user->dob          = $request->get('dob');
        $user->phonenumber = $request->get('phonenumber');
        $user->email     = $request->get('email');
        $user->save();

        return redirect()->back();
    }






    public function viewDoctor(){
        return view('adminPages.doctors');
    }
    public function addDoctor(){
        return view('adminPages.add-doctor');
    }
    public function createDoctor(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phonenumber' => 'required',
            'department' => 'required',
        ]);

        User::create([
            'role' => 'doctor',
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'dob'   => $request['dob'],
            'gender' => $request['gender'],
            'phonenumber' => $request['phonenumber'],
            'department' => $request['department'],
        ]);

        return redirect()->back()
                        ->with('success','Product created successfully.');

    }
}
