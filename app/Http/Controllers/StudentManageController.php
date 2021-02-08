<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use App\Models\StudentManage;
use Illuminate\Http\Request;

class StudentManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = StudentManage::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $faculties = Faculty::all();
        return view('student.create', compact('departments', 'faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            's_name'=>'required|string|min:5|max:12',
            's_college'=>'required|string|min:5|max:12',
            's_department'=>'required|string|min:5|max:12',
            's_faculty'=>'required|string|min:5|max:12',
            's_year'=>'required|string|min:5|max:12',
            's_semester'=>'required|string|min:5|max:12',
            's_registration'=>'required|string|min:5|max:12',
            's_symbolno'=>'required|string|min:5|max:12',
            's_dob'=>'required|string|min:5|max:12',
            's_parent'=>'required|string|min:5|max:12',
            's_email'=>'required|string|unique:users',
            's_mobile'=>'required|string|numeric',
            's_address'=>'required|string|min:8|max:15',
        ]);
        $students = StudentManage::create($data);
        return redirect()->route('/student')
                        ->with('success', 'Student added Successfully');
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
