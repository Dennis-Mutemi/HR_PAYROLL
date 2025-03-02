<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
//use Inertia\Inertia;


//Route::inertia('/','Home');
Route::inertia('/','Home',['User'=>'Dennis'])->name('home');

// Route::get('/',function(){
//     sleep(1);
//     return inertia::render('Home',['User'=>'Dennis']);
// })->name('home');
Route::inertia('/register','Auth/Register')->name('register');
Route::post('/register',[AuthController::class,'Register']);

Route::inertia('/logi','Auth/login')->name('login');
Route::post('/login',[AuthController::class,'login']);