<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/bookingtamu', function () {
    return view('bookingGuest');
});

Route::get('/admin/check', function () {
    return view('check.index');
});

//Admin Dashboard
Route::get('admin', function () {
    return view('dashboard');
});

//register
Route::get('register', [RegisterController::class,'register']);
Route::post('register', [RegisterController::class,'store']);


//Admin Login
Route::get('login', [AdminController::class,'login']);
Route::post('login', [AdminController::class,'check_login']);
Route::get('admin/logout', [AdminController::class,'logout']);

//Room Routes
Route::get('admin/room/{id}/delete',[KamarController::class,'destroy']);
Route::resource('admin/room',KamarController::class);

//Customer Routes
Route::get('admin/customer/{id}/delete',[TamuController::class,'destroy']);
Route::resource('admin/customer',TamuController::class);

//Booking Routes
Route::get('admin/booking/{id}/delete',[BookingController::class,'destroy']);
Route::resource('admin/booking',BookingController::class);
