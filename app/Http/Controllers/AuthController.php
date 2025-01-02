<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|max:50',
        ]);
        if(Auth::attempt($request->only('email','password'),$request->remember)) {
            return redirect('/dashboard');
        }
        return back()->with('failed','Email atau Password salah!');
    }
    public function logout() {
        Auth::logout(Auth::user());
        return redirect('/login');
    }
}
