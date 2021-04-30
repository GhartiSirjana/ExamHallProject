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

  
    public function create()
    {
        $departments = Department::all();
        return view('staff.create', compact('departments'));
    }

  
    public function store(Request $request)
    {
        $data = $request->validate([
            'staffname'=>'required|string|min:5|regex:/^[a-zA-Z\s]+$/',
            'department_id'=>'required'
        ]);

        
        StaffManage::create($data);
        return redirect('/staff');
    }

   
    public function show(StaffManage $staffManage, $id)
    {
        
    }

   
    public function edit(StaffManage $staffManage)
    {
        $departments = Department::all();
        return view('staff.edit', compact( 'staffManage', 'departments'));
  
    }

   
    public function update(Request $request, StaffManage $staffManage )
    {
        $request->validate([
            'staffname'=>'required|string|min:5|regex:/^[a-zA-Z\s]+$/',
            'department_id'=>'required'
        ]);
        $staffManage->staffname = $request->input('staffname');
        $staffManage->department_id = $request->input('department_id');
        $staffManage->save();

        $request->session()->flash('msg', 'data submitted');
        return redirect('/staff');
    }

   
    public function destroy($id)
    {
        $staffManage = StaffManage ::find($id);
        $staffManage->delete();
        return redirect('/staff');
    }
}
