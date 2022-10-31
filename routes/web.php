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


	Route::resources([
		'schedules' => ScheduleController::class,
		'patients' => PatientsController::class,
		'doctor-nurse' => DoctorNurseController::class,
		'cardiac-drugs' => CardiacDrugsController::class,
		'antibiotics' => AntibioticsController::class,
		'anti-inflammatory' => AntiInflammatoryController::class,
		'ear-meds' => EarMedController::class,
		'topicals' => TopicalController::class
	]);
});