<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\exammanagement;
use App\Models\Faculty;
use Illuminate\Http\Request;

class ExammanagementController extends Controller
{
    
    public function index()
    {
        $exams = exammanagement::all();
        return view('exammanagement.index', compact('exams'));

    }

    
    public function create()
    {
        $departments = Department::all();
        $faculties = Faculty::all();
        return view('exammanagement.create', compact('departments','faculties'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|min:5|max:100',
            'Faculty' => 'required|string',
            'semester' => 'required|string',
            'subject' => 'required|string',
            // 'Exam_Date' => 'required|date',
            // 'Start_Time' => 'required|time',
            // 'End_Time' => 'required|time'
        ]);

        $res = new exammanagement;
        $res->name=$request->input('Name');
        $res->faculty=$request->input('Faculty');
        $res->semester=$request->input('semester');
        $res->subject=$request->input('subject');
        $res->Exam_Date=$request->input('Exam_Date');
        $res->Start_Time=$request->input('Start_Time');
        $res->End_Time=$request->input('End_Time');

        $res->save();
        $request->session()->flash('msg' , 'data submitted');
        return redirect('/exam');
    }

    
    public function show(exammanagement $exammanagement)
    {
        return view('exammanagement.index')->with('exammanagementarr' , exammanagement::all());
    }

    
    public function edit(exammanagement $exammanagement , $id)
    {
        return view('exammanagement.edit')->with('exammanagementarr' , exammanagement::find($id));
    }

    
    public function update(Request $request, exammanagement $exammanagement)
    {
        $request->validate([
            'examname' => 'required|string|min:5|max:100',
            'faculty' => 'required|string',
            'semester' => 'required|string',
            'subject' => 'required|string',
            'examdate' => 'required|date',
            // 'starttime' => 'required|time',
            // 'endtime' => 'required|time',

            

        ]);
        $res = exammanagement::find($request->id);
        $res->name=$request->input('examname');
        $res->faculty=$request->input('faculty');
        $res->semester=$request->input('semester');
        $res->subject=$request->input('subject');
        $res->Exam_Date=$request->input('examdate');
        $res->Start_Time=$request->input('starttime');
        $res->End_Time=$request->input('endtime');


        $res->save();


        $request->session()->flash('msg' , 'data submitted');
        return redirect('index');
    }

    
    public function destroy(exammanagement $exammanagement , $id)
    {
        exammanagement::destroy(array('id' , $id));
        return redirect('/exam');
    }
}
