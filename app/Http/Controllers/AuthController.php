<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email' ],
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        $user=User::create([

        'name'=> $validated['name'],
        'email'=> $validated['email'],
        'password'=> $validated['password'],
        ]);

        return  redirect()->route('show.login');
    }

}

