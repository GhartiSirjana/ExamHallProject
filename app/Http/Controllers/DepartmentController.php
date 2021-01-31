<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Validator;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function departmentIndex()
    {
        $departs = DB::table('departments')->get();
        return view('examhallproject.departmentManage', compact('departs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function departAdd()
    {
       return view('examhallproject.DM-add'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function departStore(Request $request)
    {
      
        $request->validate([
            'department_name' => 'required|alpha|string|min:5',
            'department_code' => 'required|min:3|max:10',
            'description'     => 'required|min:5'
        ]);

       
        DB::table('departments')->insert([
            'department_name'=>$request->dmname,
            'department_code'=>$request->dmcode,
            'description'=>$request->description
        ]);
        return redirect('/department');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department, $id)
    {
        $departs = DB::table('departments')->where('id', $id)->first();
        return view('examhallproject.DM-edit', compact('deaprts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department, $id)
    {
       DB::table('departments')->where('id', $id)->update([
           'department_name'=>$request->dmname,
           'department_code'=>$request->dmcode,
           'description'=>$request->description
       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department, $id)
    {
        DB::table('departments')->where('id',$id)->delete();
        // return redirect()->route('examhallproject.department');
        return redirect('/department');
    }
}
