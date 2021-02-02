@extends('layouts.admin')
@section('content')

<div class="container">
    <br/>
    <a href="faculty_show"> Back </a>
    <div class="form-wrapper">
    <form action="{{ route('faculties.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Faculty Name </label>
            <input type="text" name="name" class="form-control" required>
            @error('name')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Faculty Short Name </label>
            <input type="text" name="short_name" class="form-control">
            @error('short_name')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Select Department </label>
            <select class="form-select" name="department_id" class="form-control"  aria-label="Default select example">
                @foreach($departments as $department)
                    <option value="{{$department->id}}">{{$department->department_name}}</option>
                @endforeach
            </select>

            @error('department')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <br/>  <br/>

        <button type="submit" class="btn btn-primary"> Add Faculty </button>
    </form>
    </div>
    </div>

@endsection
