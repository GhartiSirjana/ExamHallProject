<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Department::all();

        return view('department.index', compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'department_name' => 'required|string|min:5|regex:/^[a-zA-Z\s]+$/',
            'department_code' => 'required|min:2|max:40',
            'description'     => 'nullable|min:5'
        ]);


        $departs = Department::create($data);
        return redirect('/departments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'department_name' => 'required|string|min:5|max:100|regex:/^[a-zA-Z\s]+$/',
            'department_code' => 'required|string',
            'description' => 'required'
        ]);
        
        $department->department_name = $request->input('department_name');
        $department->department_code = $request->input('department_code');
        $department->description = $request->input('description');
        $department->save();

        $request->session()->flash('msg', 'data submitted');
        return redirect('/departments.index');
    //    $department->update($request->all());
    //    return redirect('/departments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();
        return redirect('/departments');
    }
}
