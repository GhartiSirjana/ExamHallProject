@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row my-3">
                <div class="col-md-10">
                    <h4>Add New Exam</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('exam.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Add Exam</div>
                <div class="card-body">
                    <form class="row g-3" method="POST" action="{{route('exam.store')}}">
                        @csrf
                        <div class="col-md-12">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="examname">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label>Department</label>
                            <select class="form-select" name="semester" id="" class="form-control form-control-sm">
                                @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->department_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Faculty</label>
                            <select class="form-select" name="faculty" class="form-control form-control-sm" id="faculty">
                                @foreach($faculties as $faculty)
                                <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Semester</label>
                            <input type="text" name="semester" class="form-control form-control-sm" id="semester">
                        </div>
                        <div class="col-md-6">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control form-control-sm" id="subject">
                        </div>
                        <div class="col-md-6">
                            <label>Exam date</label>
                            <input type="date" name="exam_date" class="form-control form-control-sm" id="examdate">
                        </div>
                        <div class="col-md-3">
                            <label>Start Time</label>
                            <input type="time" name="start_time" class="form-control form-control-sm" id="starttime">
                        </div>
                        <div class="col-md-3">
                            <label>End Time</label>
                            <input type="time" name="end_time" class="form-control form-control-sm" id="endtime">
                        </div>
                        <div class="col-md-2 ml-auto">
                            <button type="submit" class="btn btn-primary btn-sm">Add Exam</button>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-sm">Close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @endsection