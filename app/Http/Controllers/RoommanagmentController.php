<?php

namespace App\Http\Controllers;

use App\Models\roommanagment;
use Illuminate\Http\Request;

class RoommanagmentController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('roommanagement.addroom');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'room' => 'required|string',
            'block' => 'required|string|min:5|max:100',
            'floor' => 'required|string',
            'roomcapacity' => 'required|numeric',
            'rows' => 'required|numeric',
            'column' => 'required|numeric',

            

            

        ]);
        $res = new roommanagment;
        $res->room_no=$request->input('room');
        $res->block=$request->input('block');
        $res->floor=$request->input('floor');
        $res->capacity=$request->input('roomcapacity');
        $res->no_of_rows=$request->input('rows');
        $res->no_of_colums=$request->input('column');
    


        $res->save();


        $request->session()->flash('msg' , 'data submitted');
        return redirect('showroom');
    }

    
    public function show(roommanagment $roommanagment)
    {
        return view('roommanagement.showroom')->with('roommanagementarr' , roommanagment::all());
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
        return redirect('showroom');
    }
}
