<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    //
    public function Register(Request $Req){
        sleep(1);
        //dd($Req);
        //validate the fields
        $fields=$Req->validate([
            'name'=>['required','max:255'],
            'email'=>['required','max:255','email','unique:users'],
            'password'=>['required','confirmed']
        ]);
        //register
        $user=User::create($fields);
        //login
        Auth::login($user);
        //redirect
        return redirect()->route('home');        
    }
    public function login(Request $Req){
        
    }
}
