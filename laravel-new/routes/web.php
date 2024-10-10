<?php

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

use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;   

 

        
            

Route::get('/', function () {return redirect('/dashboard');})->middleware('guest');


	//Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	//Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	//Route::get('/home', [LoginController::class, 'home'])->middleware('guest')->name('home');
	//Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	//Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	//Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	//Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	//Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	//Route::get('/dashboard', [HomeController::class, 'index'])->middleware('guest')->name('dashboard');
	

	Route::get('/works', [PageController::class, 'showRotatingPages'])->name('works');
	Route::get('/transcedence', [PageController::class, 'transcedence'])->name('transcedence');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
	Route::get('/contact', [PageController::class, 'contact'])->name('contact'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
	Route::get('/pages/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	Route::get('/aboutUs', [PageController::class, 'aboutUs'])->name('aboutUs');
	Route::post('/aboutUs', [PageController::class, 'aboutUs'])->name('aboutUs');
	

//Posts endpoint

//Route::get('aboutUs', [ App\Http\Controllers\SchoolController::class, 'create'])->name('aboutUs');
//Route::post('school', [ App\Http\Controllers\SchoolController::class, 'store'])->name('school.store');


// Main page route

//Route::get('/home', [App\Http\Controllers\PageController::class, 'home'])->name('home');
Route::get('/vision', [App\Http\Controllers\PageController::class, 'vision'])->name('vision');
Route::post('/vision', [App\Http\Controllers\PageController::class, 'vision'])->name('vision');
Route::post('/home', [App\Http\Controllers\PageController::class, 'home'])->name('home');