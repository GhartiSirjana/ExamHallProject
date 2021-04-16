<!DOCTYPE html>
<html lang="en">

@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row mb-3">
                    <div class="col-md-10">
                        <h4>Add New Staff</h4>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('staff.index') }}" class="btn btn-success btn-sm">Back</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Staff Add</div>
                    <div class="card-body">
                        <form action="{{ route('staff.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="name" class="form-label"><strong>Staff Name</strong> </label>
                                <input type="text" name="staffname" class="form-control form-control-sm" id="staffname"">
                                @error('staffname')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="department" class="form-label"><strong>Department</strong></label>
                                <!-- <input type="text" name="department" class="form-control form-control-sm " id="department""> -->
                                <select class="form-select form-control form-control-sm" aria-label="Default select example" name="department_id">
                                @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->department_name}}</option>
                                @endforeach
                                </select>
                                @error('department')
                                    <span class=" text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection