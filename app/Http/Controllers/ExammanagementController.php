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
            'Name' => 'required|string|min:5|max:100',
            'department_id' => 'required|string',
            'faculty_id' => 'required|string',
            'semester' => 'required|string',
            'subject_id' => 'required|string',
            'Exam_Date' => 'required',
            'Start_Time' => 'required',
            'End_Time' => 'required'
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
        return view('exammanagement.edit', compact('exammanagement'));
    }

    
    public function update(Request $request, exammanagement $exammanagement)
    {
        // $request->validate([
        //     'name' => 'required|string|min:5|max:100',
        //     'faculty' => 'required|string',
        //     'semester' => 'required|string',
        //     'subject' => 'required|string',
        //     'examdate' => 'required|date',
        //     // 'starttime' => 'required|time',
        //     // 'endtime' => 'required|time',

            

        // ]);
        // $exammanagement->name = $request->input('name');
        // $exammanagement->faculty = $request->input('faculty');
        // $exammanagement->semester = $request->input('semester');
        // $exammanagement->subject = $request->input('subject');
        // $exammanagement->exam_date = $request->input('exam_date');
        // $exammanagement->save();


       


        // $request->session()->flash('msg' , 'data submitted');
        // return redirect('/exam');
    }

    
    public function destroy(exammanagement $exammanagement)
    {
        // $exammanagement->delete();
        // return redirect('/exam');
    }
}
