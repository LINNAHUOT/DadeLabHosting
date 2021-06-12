<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientController extends Controller
{
    public function patient(){
        
        return view('patientPages.index');
    }
    public function profile(){
        
        return view('patientProfile');
    }
    
}
