<?php

namespace App\Http\Controllers;

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
        return view('staff.create');
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
            'staffname'=>'required|string|min:5',
            'department'=>'required'
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
        // $staffs = DB::table('staff_manages')->where('id', $id)->first();
        // return view('examhallproject.SM-show', compact('staffs')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaffManage  $staffManage
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffManage $staffManage, $id)
    {
        // $staffs = DB::table('staff_manages')->where('id', $id)->first();
        // return view('examhallproject.SM-edit', compact('staffs'));
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
        // DB::table('staff_manages')->where('id', $id)->update([
        //     'staffname'=>$request->staffname,
        //     'department'=>$request->department
        // ]);
        // return redirect()->route('examhallproject.staffmanagement')
        //                    ->with('update', 'Staff detils updated Successfully') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaffManage  $staffManage
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffManage $staffManage, $id)
    {
        // DB::table('staff_manages')->where('id', $id)->delete();
        // return back()->with('delete', 'Staff detail has been deleted successfully');
    }
}
