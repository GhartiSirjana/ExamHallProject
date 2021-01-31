<?php

namespace App\Http\Controllers;

use App\Models\seatallocation;
use Illuminate\Http\Request;

class SeatallocationController extends Controller
{
    
    public function index()
    {
        //
    }

  
    public function create()
    {
        return view('seatallocation.seatallocation_create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:100|',
            'rooms' => 'required|string',
            'exams' => 'required|string|',
           
        ]);

        $res = new seatallocation;
        $res->name=$request->input('name');
        $res->exam=$request->input('exams');
        $res->rooms=$request->input('rooms');
        $res->save();
 
        $request->session()->flash('msg', 'data submitted');
        return redirect('seatallocation_show');
    }

    
    public function show(seatallocation $seatallocation)
    {
        return view('seatallocation.seatallocation_show')->with('seatallocationarr', seatallocation::all());
    }

    public function edit(seatallocation $seatallocation, $id)
    {
        return view('seatallocation.seatallocation_edit')->with('seatallocationarr', seatallocation::find($id));
    }

   
    public function update(Request $request, seatallocation $seatallocation)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:100|',
            'exams' => 'required|string|',
            'rooms' => 'required|string',
           
        ]);

        $res = seatallocation::find($request->id);
        $res->name=$request->input('name');
        $res->exam=$request->input('exams');
        $res->rooms=$request->input('rooms');
        $res->save();
 
        $request->session()->flash('msg', 'data submitted');
        return redirect('seatallocation_show');
    }

    
    public function destroy(seatallocation $seatallocation , $id)
    {
        seatallocation::destroy(array('id', $id));
        return redirect('seatallocation_show');
    }
}
