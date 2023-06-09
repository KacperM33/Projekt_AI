<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('shop.index');
        }
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email.required' => 'Podaj swój email.',
            'email.email' => 'Zły format emaila.',
            'password.required' => 'Podaj swoje hasło.',
        ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('shop.index');
        }

        return back()->withErrors([
            'email' => 'Niepoprawne dane logowania.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('shop.index');
    }
}
