<?php

use App\Http\Controllers\AntibioticsController;
use App\Http\Controllers\AntiInflammatoryController;
use App\Http\Controllers\CardiacDrugsController;
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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\DoctorNurseController;
use App\Http\Controllers\EarMedController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TopicalController;

Route::get('/patient-form', [MainController::class, 'index'])->name('patient-form');


Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');

	//Schedules
	Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules.index');

	//Patients
	Route::get('/patients', [PatientsController::class, 'index'])->name('patients.index');
	Route::post('/patients/store', [PatientsController::class, 'store'])->name('patients.store');
	Route::put('/patients/update/{id}', [PatientsController::class, 'update'])->name('patients.update');
	Route::delete('/patients/destroy/{id}', [PatientsController::class, 'destroy'])->name('patients.destroy');
	
	//Doctor-Nurse
	Route::get('/doctor-nurse', [DoctorNurseController::class, 'index'])->name('doctor-nurse.index');
	Route::post('/doctor-nurse/store', [DoctorNurseController::class, 'store'])->name('doctor-nurse.store');
	Route::put('/doctor-nurse/update/{id}', [DoctorNurseController::class, 'update'])->name('doctor-nurse.update');
	Route::delete('/doctor-nurse/destroy/{id}', [DoctorNurseController::class, 'destroy'])->name('doctor-nurse.destroy');

	//Inventory
	//Cardiac Drugs
	Route::get('/cardiac-drugs', [CardiacDrugsController::class, 'index'])->name('cardiac-drugs.index');
	Route::post('/cardiac-drugs/store', [CardiacDrugsController::class, 'store'])->name('cardiac-drugs.store');
	Route::put('/cardiac-drugs/update/{id}', [CardiacDrugsController::class, 'update'])->name('cardiac-drugs.update');
	Route::delete('/cardiac-drugs/destroy/{id}', [CardiacDrugsController::class, 'destroy'])->name('cardiac-drugs.destroy');
	
	//Antibiotics
	Route::get('/antibiotics', [AntibioticsController::class, 'index'])->name('antibiotics.index');
	Route::post('/antibiotics/store', [AntibioticsController::class, 'store'])->name('antibiotics.store');
	Route::put('/antibiotics/update/{id}', [AntibioticsController::class, 'update'])->name('antibiotics.update');
	Route::delete('/antibiotics/destroy/{id}', [AntibioticsController::class, 'destroy'])->name('antibiotics.destroy');
	
	//Anti-Inflammatory
	Route::get('/anti-inflammatory', [AntiInflammatoryController::class, 'index'])->name('anti-inflammatory.index');
	Route::post('/anti-inflammatory/store', [AntiInflammatoryController::class, 'store'])->name('anti-inflammatory.store');
	Route::put('/anti-inflammatory/update/{id}', [AntiInflammatoryController::class, 'update'])->name('anti-inflammatory.update');
	Route::delete('/anti-inflammatory/destroy/{id}', [AntiInflammatoryController::class, 'destroy'])->name('anti-inflammatory.destroy');
	
	//Ear-Meds
	Route::get('/ear-meds', [EarMedController::class, 'index'])->name('ear-meds.index');
	Route::post('/ear-meds/store', [EarMedController::class, 'store'])->name('ear-meds.store');
	Route::put('/ear-meds/update/{id}', [EarMedController::class, 'update'])->name('ear-meds.update');
	Route::delete('/ear-meds/destroy/{id}', [EarMedController::class, 'destroy'])->name('ear-meds.destroy');
	
	//Topicals
	Route::get('/topicals', [TopicalController::class, 'index'])->name('topicals.index');
	Route::post('/topicals/store', [TopicalController::class, 'store'])->name('topicals.store');
	Route::put('/topicals/update/{id}', [TopicalController::class, 'update'])->name('topicals.update');
	Route::delete('/topicals/destroy/{id}', [TopicalController::class, 'destroy'])->name('topicals.destroy');
});