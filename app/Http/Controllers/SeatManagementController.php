<?php

namespace App\Http\Controllers;

use App\SeatManagement;
use Illuminate\Http\Request;

class SeatManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('examhallproject.home');
    }
    public function seatTest()
    {
        return view('examhallproject.seatmanagement');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SeatManagement  $seatManagement
     * @return \Illuminate\Http\Response
     */
    public function show(SeatManagement $seatManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SeatManagement  $seatManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(SeatManagement $seatManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SeatManagement  $seatManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeatManagement $seatManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SeatManagement  $seatManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeatManagement $seatManagement)
    {
        //
    }
}
