<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class AddcollegeController extends Controller
{
    
    public function index()
    {
        $colleges = College::all();
        return view('college.index', compact('colleges'));
    }

    
    public function create()
    {
        return view('college.create');
    }

    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:5|max:100',
            'address' => 'required|string',
            'description' => 'required|string',
        ]);
        // $res = new College;
        // $res->name=$request->input('college');
        // $res->address=$request->input('address');
        // $res->description=$request->input('description');
        // $res->save();

        $college = College::create($data);
        $request->session()->flash('msg', 'data submitted');
        return redirect('/colleges');



    }

    
    public function show(College $College)
    {
        return view('college.show', compact('College'));
    }

    
    public function edit(College $college)
    {
        return view('college.edit', compact('college'));
    }

    
    public function update(Request $request, College $college)
    {
        $data = $request->validate([
            'name' => 'required|string|min:5|max:100',
            'address' => 'required|string',
            'description' => 'required|string',
        ]);

               
        $college->name=$request->input('name');
        $college->address=$request->input('address');
        $college->description=$request->input('description');
        $college->save();

        // $college = College::create($data);
        // $res =  College::find($request->id);
        // $res->name=$request->input('college');
        // $res->address=$request->input('address');
        // $res->description=$request->input('description');
        // $res->save();
        $request->session()->flash('msg' , 'data submitted');
        return redirect('colleges');
    }

    
    public function destroy(College $college)
    {
        $college->delete();
        return redirect('/colleges');
    }
}
