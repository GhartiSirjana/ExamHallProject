@extends('layouts.admin')
@push('styles')
@endpush
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row mb-3">
                <div class="col-md-10">
                    <h4>Update Faculty</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('faculties.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Upadate Faculty</div>
                <div class="card-body">
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
            </div>
        </div>
    </body>

    </html>
@endsection
