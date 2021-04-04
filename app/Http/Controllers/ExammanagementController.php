<?php

namespace App\Http\Controllers;

use App\Models\exammanagement;
use Illuminate\Http\Request;

class ExammanagementController extends Controller
{
    
    public function index()
    {
    
    }

    
    public function create()
    {
        return view('exammanagement.createexam');
    }

    
    public function store(Request $request)
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
        $res = new exammanagement;
        $res->name=$request->input('examname');
        $res->faculty=$request->input('faculty');
        $res->semester=$request->input('semester');
        $res->subject=$request->input('subject');
        $res->Exam_Date=$request->input('examdate');
        $res->Start_Time=$request->input('starttime');
        $res->End_Time=$request->input('endtime');


        $res->save();


        $request->session()->flash('msg' , 'data submitted');
        return redirect('showexam');
    }

    
    public function show(exammanagement $exammanagement)
    {
        return view('exammanagement.showexam')->with('exammanagementarr' , exammanagement::all());
    }

    
    public function edit(exammanagement $exammanagement , $id)
    {
        return view('exammanagement.editexam')->with('exammanagementarr' , exammanagement::find($id));
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
        return redirect('showexam');
    }

    
    public function destroy(exammanagement $exammanagement , $id)
    {
        exammanagement::destroy(array('id' , $id));
        return redirect('showexam');
    }
}
