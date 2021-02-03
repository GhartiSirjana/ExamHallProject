@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
<div class="container">
    <br/>  
    <br/>  
<a href="seatallocation_show"> Back </a>
    <form action="{{route('seatallocation.seatallocation_edit', [$seatallocationarr->id])}}" method="post">
    @csrf
    <div class="form-group">
    <label> Name </label>
    <input type="text" name="name"  class="form-control" value="{{$seatallocationarr->Name}}" required > 
    @error('name')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
    </div>
    <div class="form-group">
            <label>Select Exams </label>
            <select class="form-select" name="exams" class="form-control" value="{{$seatallocationarr->Exams}}" aria-label="Default select example">
                <option selected>Bsc.Csit</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            @error('exams')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
        </div>
                  
        <div class="form-group">
            <label>Select Rooms </label>
            <select class="form-select" name="rooms" class="form-control" value="{{$seatallocationarr->Rooms}}" aria-label="Default select example">
                <option selected>Block1</option>
                <option>block2</option>
                <option>block3</option>
                <option>block4</option>
            </select>

            @error('rooms')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
        </div>
    <br/>
   <button type="submit" class="btn btn-primary"> submit </button>
    </form>
    </div>
</body>
</html>
@endsection