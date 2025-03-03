<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
//use Inertia\Inertia;


//Route::inertia('/','Home');


// Route::get('/',function(){
//     sleep(1);
//     return inertia::render('Home',['User'=>'Dennis']);
// })->name('home');



Route::middleware('auth')->group(function () {
    Route::inertia('/home', 'Home', ['User' => 'Dennis'])->name('home');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::inertia('/register', 'Auth/Register')->name('register');
    Route::post('/register', [AuthController::class, 'Register']);
    Route::inertia('/', 'Auth/login');
    Route::post('/', [AuthController::class, 'login']);
});