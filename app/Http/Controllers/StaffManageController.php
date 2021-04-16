<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\StaffManage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validator;

class StaffManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $staffs = DB::table('staff_manages')->get();
        $staffs = StaffManage::all();
        return view('staff.index', compact('staffs'));
    }

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('staff.create', compact('departments'));
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
            'staffname'=>'required|string|min:5|regex:/^[a-zA-Z\s]+$/',
            'department_id'=>'required'
        ]);

        // return redirect()->back()->with('error', 'Something went wrong.');

        // return redirect()->back()->with('success', 'Staff Added Successfully');
        StaffManage::create($data);
        return redirect('/staff');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StaffManage  $staffManage
     * @return \Illuminate\Http\Response
     */
    public function show(StaffManage $staffManage, $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaffManage  $staffManage
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffManage $staffManage, $id)
    {
        $departments = Department::all();
        return view('staff.edit', compact( 'staffManage', 'departments'));
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StaffManage  $staffManage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaffManage  $staffManage
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffManage $staffManage, $id)
    {
     
    }
}
