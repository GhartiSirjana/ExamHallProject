<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
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
        $departments = Department::all();
        // dd($faculties);
        return view('subject.create', compact('departments'));
        

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
            'department_id' => 'required|numeric|exists:departments,id',
            'subjectname' => 'required|array|min:1', // ['Physics', 'Calculus', 'IT']
            'subjectname.*' => 'required|string', // Physics
            'code' => 'required|array|min:1',
            'code.*' => 'required|numeric',
            'semester' => 'required|string', 
            'faculty_id' => 'required|numeric|exists:faculties,id',
        ]);
        foreach($data['subjectname'] as $index => $sub) {
            
            $subject = subject::create([
                'subjectname' => $sub,
                'subjectcode' => $data['code'][$index],
                'semester' => $data['semester'],
                'department_id' => $data['department_id'],
                'faculty_id' => $data['faculty_id']
            ]);
        }
        
 
        $request->session()->flash('msg', 'data submitted');
        return redirect('/subjects');
    }

   
    public function show(subject $subject)
    {
        return view('subject.show', compact('subject'));
    }

   
    public function edit(subject $subject)
    {
        $departments = Department::all();
        $faculties = Faculty::all();
        return view('subject.edit', compact('departments', 'faculties'));
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

    
    public function destroy(subject $subject,)
    {
        $subject->delete();
        return redirect('subjects');
    }
}
