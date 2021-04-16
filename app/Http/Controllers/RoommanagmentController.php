<?php

namespace App\Http\Controllers;

use App\Models\roommanagment;
use App\Models\Block;
use App\Models\Floor;
use App\Models\StaffManage;
use Illuminate\Http\Request;

class RoommanagmentController extends Controller
{
    
    public function index()
    {
        $rooms = roommanagment::all();
        return view('roommanagement.index', compact('rooms'));
    }

    
    public function create()
    {
        $blocks = Block::all();
        $floors = Floor::all();
        $staffs = StaffManage::all();
        return view('roommanagement.create', compact('blocks', 'floors', 'staffs'));
    }
   
    public function store(Request $request)
    {
        $data = $request->validate([
            'roomno' => 'required|numeric',
            'block_id' => 'required|string',
            'floor_id' => 'required|string',
            'capacity' => 'required|numeric',
            'rows' => 'required|numeric',
            'columns' => 'required|numeric',
            'staff_id' => 'required|string'
        ]);

        $roommanagement = roommanagment::create($data);
        $request->session()->flash('msg' , 'data submitted');
        return redirect('/room');

        // $res = new roommanagment;
        // $res->number=$request->input('roomno');
        // $res->block=$request->input('block_id');
        // $res->floor=$request->input('floor_id');
        // $res->capacity=$request->input('capacity');
        // $res->rows=$request->input('rows');
        // $res->cols=$request->input('columns');
        // $res->staff_id=$request->input('staff_id');

        // $res->save();
        // $roommanagement = roommanagment::create($data);

    }

    
 

    
    public function edit(roommanagment $roommanagment)
    {
        //
    }

    
    public function update(Request $request, roommanagment $roommanagment)
    {
        //
    }

    
    public function destroy(roommanagment $roommanagment , $id)
    {
        roommanagment::destroy(array('id' , $id));
        return redirect('index');
    }
}
