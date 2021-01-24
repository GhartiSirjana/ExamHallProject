<?php

namespace App\Http\Controllers;

use App\faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
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
        return view('faculty.faculty_create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:100|',
            'short_name' => 'required|string',
            'department' => 'required|string|',
           
        ]);

        $res = new faculty;
        $res->name=$request->input('name');
        $res->short_name=$request->input('short_name');
        $res->department=$request->input('department');
        $res->save();
 
        $request->session()->flash('msg', 'data submitted');
        return redirect('faculty_show');
    }

    
    public function show(faculty $faculty)
    {
        return view('faculty.faculty_show')->with('facultyarr', faculty::all());
    }

   
    public function edit(faculty $faculty, $id)
    {
        return view('faculty.faculty_edit')->with('facultyarr', faculty::find($id));
    }

    
    public function update(Request $request, faculty $faculty)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:100|',
            'short_name' => 'required|string',
            'department' => 'required|string|',
           
        ]);
        
        $res = faculty::find($request->id);
        $res->name=$request->input('name');
        $res->short_name=$request->input('short_name');
        $res->department=$request->input('department');
        $res->save();
 
        $request->session()->flash('msg', 'data submitted');
        return redirect('faculty_show');
    }

    public function destroy(faculty $faculty, $id)
    {
        faculty::destroy(array('id', $id));
        return redirect('faculty_show');

    }
}
