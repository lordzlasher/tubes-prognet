<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

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



//Admin Login
Route::get('admin/login', [AdminController::class,'login']);
Route::post('admin/login', [AdminController::class,'check_login']);
Route::get('admin/logout', [AdminController::class,'logout']);


//Admin Dashboard
Route::get('admin', function () {
    return view('dashboard');
});

//Room Routes
Route::get('admin/room/{id}/delete',[KamarController::class,'destroy']);
Route::resource('admin/room',KamarController::class);

//Customer Routes
Route::get('admin/customer/{id}/delete',[TamuController::class,'destroy']);
Route::resource('admin/customer',TamuController::class);

//Booking Routes
Route::get('admin/booking/{id}/delete',[BookingController::class,'destroy']);
Route::resource('admin/booking',BookingController::class);
