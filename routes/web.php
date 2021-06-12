<?php

use App\Http\Controllers\pagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\patient;
use App\Http\Controllers\crudPatient;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\patients;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');

});

Auth::routes();


Route::get('/home', [HomeController::class,'index']);
Route::group(['prefix'=>'admin','middleware'=>['auth','is_admin']],function(){
    Route::get('/',[adminController::class,'admin'])->name('admin');

//appoinment on admin page
    Route::get('/appointments',[adminController::class,'viewAppointment'])->name('admin/appointments');
    Route::get('/appointments/add',[adminController::class,'addAppointment'])->name('admin/appointments/add');
   //Route::post('/appointments',[appointmentController::class,'createAppointment'])->name('appointments.create');

    Route::post('/appointments',[appointmentController::class,'store'])->name('appointments.store');


    //Route::get('/patients',[adminController::class,'viewPatient'])->name('admin/patients');
    Route::get('/patients/add',[adminController::class,'addPatient'])->name('admin/patients/add');
    //Route::post('/patients/addPatient',[adminController::class, 'createPatient'])->name('addPatient');
    Route::resource('patients', crudPatient::class);




    Route::get('/doctors',[adminController::class,'viewDoctor'])->name('admin/doctors');
    Route::get('/doctors/add',[adminController::class,'addDoctor'])->name('admin/doctors/add');

});


Route::group(['prefix'=>'patient','middleware'=>['auth','is_patient']],function(){
    Route::get('/',[patientController::class,'patient'])->name('patient');
    Route::get('/profile',[patientController::class,'profile'])->name('patient/profile');});

Route::group(['prefix'=>'doctor','middleware'=>['auth','is_doctor']],function(){
    Route::get('/',[doctorController::class,'doctor'])->name('doctor');});


// Route::get('/admin_login',[pagesController::class,'admin_login'])->name('admin_login');
// Route::get('/doctor_login',[HomeController::class,'doctor_login'])->name('doctor_login');
// Route::get('/patient_login',[HomeController::class,'patient_login'])->name('patient_login');


// Route::get('/patient_register',[HomeController::class,'patient_register'])->name('patient_register');





// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');


// //----------------
// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
// Route::get('doctor/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
