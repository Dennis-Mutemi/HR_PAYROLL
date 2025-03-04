<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{

    public function Register(Request $Req)
    {
        //dd('okey');
        //validate the fields
        $fields = $Req->validate([
            'avatar' => ['image', 'nullable', 'max:300'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'confirmed']
        ]);

        if ($Req->hasFile("avatar")) {
            $fields['avatar'] = Storage::disk("public")->put("avatars", $Req->avatar);
        }
        //register
        $user = User::create($fields);
        //login
        Auth::login($user);
        //redirect
        return redirect()->route('home');
    }
    public function login(Request $request)
    {
        //dd($Req);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        //dd($request);        
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended('/');
    }
}
