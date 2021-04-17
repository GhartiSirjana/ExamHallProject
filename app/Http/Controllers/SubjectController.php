<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\exammanagement;
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
        // dd($subjects);
        return view('subject.index', compact('subjects'));
    }

   
    public function create()
    {
        $departments = Department::all();
        $faculties = Faculty::all();
<<<<<<< HEAD
=======
     
>>>>>>> 4607777bcc7a4429a51fe800fe9acaf224e24083
        // dd($faculties);
        return view('subject.create', compact('departments', 'faculties'));
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
        return redirect('/subjects');
    }

   
    public function edit(subject $subject)
    {
        $departments = Department::all();
        $faculties = Faculty::all();
        return view('subject.edit', compact('subject','departments', 'faculties'));
    }

   
    public function update(Request $request, subject $subject)
    {
        $data = $request->validate([
            'subjectname' => 'required|string',
            'subjectcode' => 'required|numeric',
            'semester' => 'required|string', 
            'faculty_id' => 'required|string',
            'department_id' => 'required|string',
        ]);
    
        $subject->subjectname=$request->input('subjectname');
        $subject->subjectcode=$request->input('subjectcode');
        $subject->semester=$request->input('semester');
        $subject->faculty_id=$request->input('faculty_id');
        $subject->department_id=$request->input('department_id');
        $subject->save();
 
        $request->session()->flash('msg', 'data submitted');
        return redirect('/subjects');
    }

    
    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('/subjects');
    }
}
