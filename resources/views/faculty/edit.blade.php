@extends('layouts.admin')
@push('styles')

    <style>
        .form-group input {
            width: 50%;
        }

        .form-group .form-select {
            width: 50%;
        }

        .container a {
            color: blue;
        }

    </style>
@endpush
@section('content')

    <div class="container">
        <br />
        <br />
        <a href="faculty_show"> Back </a>
        <form class="" action="{{ route('faculties.update', $faculty->id) }}" method="post">
            @csrf
            @method('put')

            <div class="form-group ">
                <label> Name </label>
                <input type="text" name="name" class="form-control" value="{{ $faculty->name }}" required>
                @error('name')
                    <div class="alert alert-danger">
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label> Short Name </label>
                <input type="text" name="short_name" class="form-control" value="{{ $faculty->short_name }}" required>
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
            <br />
            <button type="submit" class="btn btn-primary"> submit </button>
        </form>
    </div>
    </body>

    </html>
@endsection
