<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\User;
//use Inertia\Inertia;


//Route::inertia('/','Home');

// Route::get('/',function(){
//     sleep(1);
//     return inertia::render('Home',['User'=>'Dennis']);
// })->name('home');

Route::middleware('auth')->group(function () {
    Route::inertia('/home', 'Home', ['Users' => 'Dennis'])->name('home');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::inertia('/employee', 'Employee', ['Users' => User::paginate(5)])->name('Employee');
    //Route::inertia('/employee', 'Employee', ['Users' => User::all(['name'])])->name('Employee');
    Route::inertia('/addemployee', 'AddEmployee')->name('addemployee');
});

Route::middleware('guest')->group(function () {
    Route::inertia('/register', 'Auth/Register')->name('register');
    Route::post('/register', [AuthController::class, 'Register']);
    Route::inertia('/', 'Auth/login');
    Route::post('/', [AuthController::class, 'login']);
});