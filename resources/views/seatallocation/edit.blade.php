@extends('layouts.admin')
@section('content')

<div class="container">
    <br/>  
    <br/>  
<a href="seatallocation_show"> Back </a>
    <form action="{{ route('seatallocations.update', $seatallocation->id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
    <label> Name </label>
    <input type="text" name="name"  class="form-control" value="{{$seatallocation->name}}" required > 
    @error('name')
            
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
    </div>
    <div class="form-group">
            <label>Select Exams </label>
            <select class="form-select" name="exams" class="form-control" value="{{$seatallocation->exams}}" aria-label="Default select example">
                <option selected>Bsc.Csit</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            @error('exams')
           
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
        </div>
                  
        <div class="form-group">
            <label>Select Rooms </label>
            <select class="form-select" name="rooms" class="form-control" value="{{$seatallocation->rooms}}" aria-label="Default select example">
                <option selected>Block1</option>
                <option>block2</option>
                <option>block3</option>
                <option>block4</option>
            </select>

            @error('rooms')
         
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
        </div>
    <br/>
   <button type="submit" class="btn btn-primary"> submit </button>
    </form>
    </div>

@endsection