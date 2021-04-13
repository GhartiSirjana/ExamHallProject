<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Floor;
use App\Models\roommanagment;
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
        $block = Block::all();
        $floor = Floor::all();
        return view('roommanagement.create', compact('block', 'floor'));
    }
    public function block()
    {

        
        return view('roommanagement.blockindex');
    }
    public function floor()
    {
        return view('roommanagement.floorindex');
    }

   
    public function store(Request $request)
    {
        $data = $request->validate([
            'roomno' => 'required|string',
            'block' => 'required|string|min:5|max:100',
            'floor' => 'required|string',
            'capacity' => 'required|numeric',
            'rows' => 'required|numeric',
            'columns' => 'required|numeric',
            'incigilator' => 'required|numeric',

        ]);
        $room = roommanagment::create($data);
        // $res = new roommanagment;
        // $res->number=$request->input('roomno');
        // $res->block=$request->input('block');
        // $res->floor=$request->input('floor');
        // $res->capacity=$request->input('capacity');
        // $res->rows=$request->input('rows');
        // $res->cols=$request->input('columns');
        // $res->invigilator=$request->input('invigilator');

        // $res->save();
        $request->session()->flash('msg' , 'data submitted');
        return redirect('/room');
    }

    
 

    
    public function edit(roommanagment $roommanagment)
    {
        return view('roommanagement.edit', compact('roommanagement'));
    }

    
    public function update(Request $request, roommanagment $roommanagment)
    {
        $request->validate([
            'roomno' => 'required|string',
            'block' => 'required|string|min:5|max:100',
            'floor' => 'required|string',
            'capacity' => 'required|numeric',
            'rows' => 'required|numeric',
            'columns' => 'required|numeric',
            'incigilator' => 'required|numeric',

        ]);
        $res = new roommanagment;
        $res->number=$request->input('roomno');
        $res->block=$request->input('block');
        $res->floor=$request->input('floor');
        $res->capacity=$request->input('capacity');
        $res->rows=$request->input('rows');
        $res->cols=$request->input('columns');
        $res->invigilator=$request->input('invigilator');

        $res->save();
        $request->session()->flash('msg' , 'data submitted');
        return redirect('/room');
    }

    
    public function destroy($id)
    {
        $room = roommanagment::find($id);
        $room->delete();
        return redirect('/room');
    }
}
