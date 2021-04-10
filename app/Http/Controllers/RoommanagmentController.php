<?php

namespace App\Http\Controllers;

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
        return view('roommanagement.create');
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
        return redirect('index');
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
