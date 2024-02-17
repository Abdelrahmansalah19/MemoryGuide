<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'] );
Route::get('/about',[AboutController::class,'index'] );
Route::get('/topic',[TopicController::class,'index'] );
Route::get('/doctor',[DoctorController::class,'index'] );
Route::post('/doctors',[DoctorController::class,'store'] );

Route::get('/booking',[BookingController::class,'index'] );
Route::post('/bookings',[BookingController::class,'store'] );
Route::get('/contact',[ContactController::class,'index'] );
Route::post('/contacts',[ContactController::class,'store'] );


