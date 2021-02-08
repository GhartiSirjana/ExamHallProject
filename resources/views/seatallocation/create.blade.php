@extends('layouts.admin')
@push('styles')    
    <link href="{{ asset('css/subject.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    <br/>
    <a href="show"> Back </a>
    <div class="form-wrapper">
    <form action="{{ route('seatallocations.store') }}" method="post">
        @csrf
        <div class="form-group">
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
        <button type="submit"> Close </button>
    </form>
    </div>
    </div>


@endsection