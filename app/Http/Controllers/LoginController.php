<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('RegistrationForm.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|confirmed|min:8|max:12'
        ]);
    }
}
