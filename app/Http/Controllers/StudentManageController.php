<?php

namespace App\Http\Controllers;

use App\Models\College;
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
        $colleges = College::all();
        return view('student.create', compact('departments', 'faculties', 'colleges'));
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
            'name' => 'required|min:5|max:15|string',
            'college' => 'required',
            'department' => 'required', 
            'faculty' => 'required',
            'year' => 'required|numeric',
            'semester' => 'required',
            'registerNumber'=> 'required|string',
            'symbolno' => 'required|numeric|unique:student_manages,symbolno',
            'dob' => 'required',
            'parent' => 'required|min:5|max:12',
            'email' => 'required|unique:users',
            'mobile' => 'required|numeric', 
            'address' => 'required|min:5|max:12'
        ]);

        $student = StudentManage::create($data);
        return redirect('/student');
                        
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
