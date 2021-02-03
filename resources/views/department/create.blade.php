@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="mb-3 row">
                    <div class="col-md-10">
                        <h4>Add New Department</h4>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('departments.index') }}" class="btn btn-success btn-sm">Back</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Department Add</div>
                    <!-- @if (Session::has('success')) <div class="alert alert-danger">
                            {{ Session::get('success') }}
                        </div> @endif -->
                    <div class="card-body">
                        <form action="{{ route('departments.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label"><strong>Department Name</strong> </label>
                                <input type="text" name="department_name" class="form-control form-control-sm" id="dmname">
                                @error('department_name')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="code" class="form-label"><strong>Department Code</strong> </label>
                                <input type="text" name="department_code" class="form-control form-control-sm" id="dmcode"">
                                    @error('department_code')
                                                <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description"><strong>Description</strong></label>
                                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                @error('description')
                                    <span class=" text-danger">{{ $message }}</span>
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

@endsection
