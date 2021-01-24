<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('examhallproject.home');
    }
    public function test()
    {
        return view('examhallproject.testhome');
    }
}
