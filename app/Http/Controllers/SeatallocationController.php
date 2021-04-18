<?php

namespace App\Http\Controllers;

use App\Models\exammanagement;
use App\Models\seatallocation;
use App\Models\Block;
use App\Models\roommanagment;
use App\Models\SeatAllocationExam;
use App\Models\SeatAllocationRoom;
use Illuminate\Http\Request;

class SeatallocationController extends Controller
{
    
    public function index()
    {
        $seatallocations = seatallocation::all();
        // dd("$seatallocations");
        return view('seatallocation.index', compact('seatallocations'));
    }

  
    public function create()
    {
        $exams = exammanagement::all();
        // $blocks = Block::all();
        $rooms = roommanagment::all();
        return view('seatallocation.create', compact('rooms', 'exams'));

    }

    public function store(Request $request)
    {
       $data = $request->validate([
            'name' => 'required|string|min:4|max:100',
            'rooms' => 'required|array',
            'rooms.*' => 'required|numeric',
            'exams' => 'required|array',
            'exams.*'=>'required|numeric',
        ]);

        // save seat allocation
        $seatallocation = seatallocation::create(['name' => $data['name']]);

        $seatallocation->selectedRooms()->attach($data['rooms']);
        $seatallocation->selectedExams()->attach($data['exams']);

        
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
            'name' => 'required|string|min:5|max:100|regex:/^[a-zA-Z\s]+$/',
            'exam' => 'required|string|',
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
