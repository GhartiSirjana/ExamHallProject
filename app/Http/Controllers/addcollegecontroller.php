<?php

namespace App\Http\Controllers;

use App\Models\addcollege;
use Illuminate\Http\Request;

class AddcollegeController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('college.createcollege');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:100',
            'address' => 'required|string',
            'description' => 'required|string',
        ]);
        $res = new addcollege;
        $res->name = $request->input('name');
        $res->address=$request->input('address');
        $res->description=$request->input('description');
        $res->save();


        $request->session()->flash('msg' , 'data submitted');
        return redirect('/showcollege');



    }

    
    public function show(addcollege $addcollege)
    {
        return view('college.showcollege')->with('addcollegearr' , addcollege::all());
    }

    
    public function edit(addcollege $addcollege , $id)
    {
        return view('college.editcollege')->with('addcollegearr' , addcollege::find($id));
    }

    
    public function update(Request $request, addcollege $addcollege)
    {
        $request->validate([
            'college' => 'required|string|min:5|max:100',
            'address' => 'required|string',
            'description' => 'required|string',
        ]);
        $res =  addcollege::find($request->id);
        $res->name=$request->input('college');
        $res->address=$request->input('address');
        $res->description=$request->input('description');
        $res->save();


        $request->session()->flash('msg' , 'data submitted');
        return redirect('showcollege');
    }

    
    public function destroy(addcollege $addcollege , $id)
    {
        addcollege::destroy(array('id' , $id));
        return redirect('showcollege');
    }
}
