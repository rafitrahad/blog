<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function showLogin()
    {

        return view('login');
    }

    public function showSignup()
    {

        return view('signup');
    }

    public function signup(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required'],
            'password' => ['required', 'confirmPassword', Password::min(8)],
        ]);
        
        

    }
}
