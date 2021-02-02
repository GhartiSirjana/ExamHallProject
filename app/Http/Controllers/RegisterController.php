<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Validator, redirect, Response;
use Session;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function loginIndex()
    {
        return view('RegistrationForm.login');
    }


    public function index()
    {
        return view('RegistrationForm.registration');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email|max:255',
            'password'=>'required|string|max:12'
        ]);

        if (! Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        return redirect('/departments');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {

    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required|string|min:5|max:255',
            'address'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|min:6|max:12|confirmed',
            'role'=>'required'
        ]);


        $user = new User([
            'username'=>$request->username,
            'address'=>$request->address,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'repeat_password'=>Hash::make($request->cpassword),
            'role'=>$request->role
        ]);

        if($user->save()) {
            return redirect('/loginindex');

        }
        return redirect()->back()->with('error', 'Something went wrong.');
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
