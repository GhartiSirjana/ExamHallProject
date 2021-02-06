@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="mb-3 row">
                <div class="col-md-10">
                    <h4>Add New Faculty</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('faculties.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Faculty Add</div>
                <div class="card-body">
                    <form action="{{ route('faculties.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Faculty Name </label>
                            <input type="text" name="name" class="form-control form-control-sm" required>
                            @error('name')
                            <div class="alert alert-danger">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Faculty Short Name </label>
                            <input type="text" name="short_name" class="form-control form-control-sm">
                            @error('short_name')
                            <div class="alert alert-danger">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Select Department </label>
                            <select class="form-select" name="department_id" class="form-control" aria-label="Default select example">
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
                        <br /> <br />

                        <button type="submit" class="btn btn-primary btn-sm"> Add Faculty </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection