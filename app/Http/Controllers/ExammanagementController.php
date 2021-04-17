<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\exammanagement;
use App\Models\Faculty;
use App\Models\subject;
use Illuminate\Http\Request;

class ExammanagementController extends Controller
{
    
    public function index()
    {
        $exams = exammanagement::with('faculty')->get();
        // dd($exams);
        return view('exammanagement.index', compact('exams'));

    }

    
    public function create()
    {
        $departments = Department::all();
        $faculties = Faculty::all();
        $subjects = subject::all();
        return view('exammanagement.create', compact('departments','faculties', 'subjects'));
    }

    
    public function store(Request $request)
    {
        $data = $request->validate([
            'Name' => 'required|string|min:5|max:100|regex:/^[a-zA-Z\s]+$/',
            'department_id' => 'required|string',
            'faculty_id' => 'required|string',
            'semester' => 'required|string',
            'subject_id' => 'required|string',
            'subject_id' => 'required|date_format:Y-m-d',
            'Start_Time' => 'required|',
            'End_Time' => 'required|'
        ]);

        $exammanagement = exammanagement::create($data);
        $request->session()->flash('msg' , 'data submitted');
        return redirect('/exam');
    }

    
    public function show(exammanagement $exammanagement)
    {
        // return view('exammanagement.show', compact('exammanagement'));
    }

    
    public function edit(exammanagement $exammanagement)
    {
        $departments = Department::all();
        $faculties = Faculty::all();
        $subjects = subject::all();
        return view('exammanagement.edit', compact('exammanagement','departments','faculties', 'subjects'));
    }

    
    public function update(Request $request, exammanagement $exammanagement)
    {
         $request->validate([
            'Name' => 'required|string|min:5|max:100|regex:/^[a-zA-Z\s]+$/',
            'department_id' => 'required|string',
            'faculty_id' => 'required|string',
            'semester' => 'required|string',
            'subject_id' => 'required|string',
            'Exam_Date' => 'required|date_format:Y-m-d',
            'Start_Time' => 'required|',
            'End_Time' => 'required|'
        ]);
        $exammanagement->Name = $request->input('Name');
        $exammanagement->department_id = $request->input('department_id');
        $exammanagement->faculty_id = $request->input('faculty_id');
        $exammanagement->semester = $request->input('semester');
        $exammanagement->subject_id = $request->input('subject_id');
        $exammanagement->Exam_Date = $request->input('Exam_Date');
        $exammanagement->Start_Time = $request->input('Start_Time');
        $exammanagement->Exam_Time = $request->input('Exam_Time');
        $exammanagement->save();


       


        $request->session()->flash('msg' , 'data submitted');
        return redirect('/exam');
    }

    
    public function destroy($id)
    {
        $exammanagement = exammanagement::find($id);
        $exammanagement->delete();
        return redirect('/exam');
    }
}
