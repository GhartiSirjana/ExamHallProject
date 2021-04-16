<?php

namespace App\Http\Controllers;

use App\Models\seatallocation;
use Illuminate\Http\Request;

class SeatallocationController extends Controller
{
    
    public function index()
    {
        $seatallocations = seatallocation::all();
        return view('seatallocation.index', compact('seatallocations'));
    }

  
    public function create()
    {
        return view('seatallocation.create');
    }

   
    public function store(Request $request)
    {
       $data = $request->validate([
            'name' => 'required|string|min:5|max:100|',
            'room_id' => 'required|string',
            'exam_id' => 'required|string|'
        ]);
        $seatallocation = seatallocation::create($data);
      
         $request->session()->flash('msg', 'data submitted');
        return redirect('/seatallocations');
    }

    
    public function show(seatallocation $seatallocation)
    {
        return view('seatallocation.show', compact('seatallocation')); 
    }

    public function edit(seatallocation $seatallocation)
    {
        return view('seatallocation.edit', compact('seatallocation'));
    }

   
    public function update(Request $request, seatallocation $seatallocation)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:100|',
            'exam_id' => 'required|string|',
            'room_id' => 'required|string',
           
        ]);

       
        $seatallocation->name=$request->input('name');
        $seatallocation->exam=$request->input('exams');
        $seatallocation->rooms=$request->input('rooms');
        $seatallocation->save();
 
        $request->session()->flash('msg', 'data submitted');
        return redirect('seatallocations');
    }

    
    public function destroy(seatallocation $seatallocation)
    {
        $seatallocation->delete();
        return redirect('/seatallocations');
    }
}
