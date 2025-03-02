<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


//Route::inertia('/','Home');
//Route::inertia('/','Home',['User'=>'Dennis']);

Route::get('/',function(){
    sleep(1);
    return inertia::render('Home',['User'=>'Dennis']);
})->name('home');
