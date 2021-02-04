@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row mb-3">
                <div class="col-md-10">
                    <h4>Update Department</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('departments.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Upadate Department</div>
                <div class="card-body">
                    <form action="{{ route('departments.update, $department->id') }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="name" class="form-label"><strong>Department Name</strong> </label>
                            <input type="text" name="department_name" class="form-control form-control-sm" id="dmname" value="{{$department->department_name}}">
                            @error('department_name')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="code" class="form-label"><strong>Department Code</strong> </label>
                            <input type="text" name="department_code" class="form-control form-control-sm" id="dmcode" value="{{$department->department_code}}">
                            @error('department_code')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description"><strong>Description</strong></label>
                            <textarea class="form-control" id="description" rows="3" name="description" value="{{$department->description}}"></textarea>
                            @error('description')
                            <span class=" text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection