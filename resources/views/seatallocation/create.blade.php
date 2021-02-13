@extends('layouts.admin')
@push('styles')    
    <link href="{{ asset('css/subject.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
<div class="row">
        <div class="col-md-8 offset-md-2">
        <div class="row mb-3">
                    <div class="col-md-10">
                        <h4>Add New Seat</h4>
                    </div>
                    <div class="col-md-2">
                        <a href="seatallocation.index" class="btn btn-success btn-sm">Back</a>
                    </div>
                </div>
    
                <div class="card">
                    <div class="card-header">Seat Add</div>
                    <div class="card-body">
    
    <form action="{{ route('seatallocations.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label> Name </label>
            <input type="text" name="name" class="form-control" required>
            @error('name')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Select Exams </label>
            <select class="form-select" name="exams" class="form-control"  aria-label="Default select example">
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
        <div class="wrap">
        <div class="form-group">
            <label>Select Rooms </label>
            <select class="form-select" name="rooms" class="form-control"  aria-label="Default select example">
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
        <div class="plus">
        <span></span>
        <span></span>
        </div>
        </div>
   
        <br/>  <br/>

        <button type="submit" class="btn btn-primary"> Save </button>
        <button type="submit" class="btn btn-alert">Close </button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
@endsection