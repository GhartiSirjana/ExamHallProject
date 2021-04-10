<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::all();
        return view('faculty.index', compact('faculties'));
    }


    public function create()
    {
        $departments = Department::all();
        return view('faculty.create', compact('departments'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:5|max:100|',
            'short_name' => 'required|string',
            'department_id' => 'required|numeric',
        ]);

        $faculty = Faculty::create($data);

        $request->session()->flash('msg', 'data submitted');
        return redirect('/faculties');
    }


    public function show(Faculty $faculty)
    {
        // return view('faculty.show', compact('faculty'));
    }


    public function edit(Faculty $faculty)
    {
        $departments = Department::all();
        return view('faculty.edit', compact('faculty', 'departments'));
    }


    public function update(Request $request, Faculty $faculty)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:100|',
            'short_name' => 'required|string',
            'department_id' => 'required|numeric',
        ]);

        $faculty->name = $request->input('name');
        $faculty->short_name = $request->input('short_name');
        $faculty->department_id = $request->input('department_id');
        $faculty->save();

        $request->session()->flash('msg', 'data submitted');
        return redirect('/faculties');
    }

    public function destroy($id)
    {
       $faculty = Faculty::find($id);
       $faculty->delete();
       return redirect('/faculties');
    }
}
