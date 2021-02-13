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
        $subjects = subject::all();
        return view('subject.index', compact('subjects'));
    }

   
    public function create()
    {
        return view('subject.create');
        

    }

    public function store(Request $request)
    {
        // $res = new subject;
        // $res->department=$request->input('department');
        // $res->subjectname=$request->input('subjectname');
        // $res->subjectcode=$request->input('code');
        // $res->semester=$request->input('semester');
        // $res->faculty=$request->input('faculty');
        // $res->save();
        $data = $request->validate([
            'department' => 'required|string',
            'subjectname' => 'required|string',
            'code' => 'required|numeric',
            'semester' => 'required|string', 
            'faculty' => 'required|string',
        ]);
        $subject = subject::create($data);
 
        $request->session()->flash('msg', 'data submitted');
        return redirect('/subjects');
    }

   
    public function show(subject $subject)
    {
        return view('subject.show', compact('subject'));
    }

   
    public function edit(subject $subject)
    {
        return view('subject.edit', compact('subject'));
    }

   
    public function update(Request $request, subject $subject)
    {
        $data = $request->validate([
            'department' => 'required|string',
            'subjectname' => 'required|string',
            'code' => 'required|numeric',
            'semester' => 'required|string', 
            'faculty' => 'required|string',
        ]);
    
        $subject->department=$request->input('department');
        $subject->subjectname=$request->input('subjectname');
        $subject->subjectcode=$request->input('code');
        $subject->semester=$request->input('semester');
        $subject->faculty=$request->input('faculty');
        $subject->save();
 
        $request->session()->flash('msg', 'data submitted');
        return redirect('/subjects');
    }

    
    public function destroy(subject $subject)
    {
        $subject->delete();
        return redirect('subjects');
    }
}
