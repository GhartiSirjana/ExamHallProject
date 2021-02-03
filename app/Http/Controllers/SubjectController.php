<?php

namespace App\Http\Controllers;

use App\Models\subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('subject.subject_create');
        

    }

    public function store(Request $request)
    {
        $res = new subject;
        $res->department=$request->input('department');
        $res->subjectname=$request->input('subjectname');
        $res->subjectcode=$request->input('code');
        $res->semester=$request->input('semester');
        $res->faculty=$request->input('faculty');
        $res->save();
 
        $request->session()->flash('msg', 'data submitted');
        return redirect('subject_show');
    }

   
    public function show(subject $subject)
    {
        return view('subject.subject_show')->with('subjectarr', subject::all());
    }

   
    public function edit(subject $subject, $id)
    {
        return view('subject.subject_edit')->with('subjectarr', subject::find($id));
    }

   
    public function update(Request $request, subject $subject)
    {
        $res = subject::find($request->id);
        $res->department=$request->input('department');
        $res->subjectname=$request->input('subjectname');
        $res->subjectcode=$request->input('code');
        $res->semester=$request->input('semester');
        $res->faculty=$request->input('faculty');
        $res->save();
 
        $request->session()->flash('msg', 'data submitted');
        return redirect('subject_show');
    }

    
    public function destroy(subject $subject, $id)
    {
        subject::destroy(array('id', $id));
        return redirect('subject_show');
    }
}
