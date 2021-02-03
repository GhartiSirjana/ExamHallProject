<?php

namespace App\Http\Controllers;

use App\Models\StudentManage;
use Illuminate\Http\Request;

class StudentManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentIndex()
    {
        return view('examhallproject.studentManage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentAdd()
    {
        return view('examhallproject.Student-add');
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
     * @param  \App\Models\StudentManage  $studentManage
     * @return \Illuminate\Http\Response
     */
    public function show(StudentManage $studentManage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentManage  $studentManage
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentManage $studentManage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentManage  $studentManage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentManage $studentManage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentManage  $studentManage
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentManage $studentManage)
    {
        //
    }
}
