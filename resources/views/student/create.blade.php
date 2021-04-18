@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
        @if($errors->any())
            @foreach($errors->all() as $error)
            <div>
                <span class="text-danger">{{$error}}</span>
            </div>
            @endforeach
            @endif
            <div class="row my-3">
                <div class="col-md-10">
                    <h4>Add New Student</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('student.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Add Student</div>
                <div class="card-body">
                    <form class="row g-3" method="POST" action="{{route('student.store')}}">
                        @csrf

                        <div class="col-md-12">
                            <label for="student name" class="form-label">Student Name</label>
                            <input type="text" class="form-control form-control-sm" name="name" id="studentname" value="">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="student college" class="form-label">College</label>
                            <select class="form-select form-control form-control-sm" aria-label="Default select example" name="college_id">
                                @foreach($colleges as $college)
                                <option value="{{$college->id}}">{{$college->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="student department" class="form-label">Department</label>
                            <select class="form-select form-control form-control-sm" aria-label="Default select example" name="department_id">
                                @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->department_name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="student faculty" class="form-label">Faculty</label>
                            <select class="form-select form-control form-control-sm" aria-label="Default select example" name="faculty_id">
                                @foreach($faculties as $faculty)
                                <option value="{{$faculty->id}}">{{$faculty->short_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="year" class="form-label">Year</label>
                            <input type="text" name="year" class="form-control form-control-sm">
                        </div>
                     
                        <div class="col-md-4">
                            <label for="student semester" class="form-label">Semester</label>
                            <select class="form-select form-control form-control-sm" aria-label="Default select example" name="semester">
                                <option selected>Select semseter</option>
                                @foreach($semesters as $semester)
                                <option value="{{ $semester->id }}">{{$semester->semester}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="student regisno" class="form-label">Registration No.</label>
                            <input type="text" class="form-control form-control-sm" name="registerNumber" id="" value="">
                            @error('registration')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="student symbolno" class="form-label">Symbol No.</label>
                            <input type="text" class="form-control form-control-sm" name="symbolno" id="" value="">
                            @error('symbolno')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="student dob" class="form-label">Date of Birth</label>
                            <input type="text" class="form-control form-control-sm" name="dob" id="" value="">
                            @error('dob')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="student mobile" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-sm" name="email" id="" value="">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="student mobile" class="form-label">Parent Name</label>
                            <input type="text" class="form-control form-control-sm" name="parent" id="" value="">
                            @error('parent')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                       
                        <div class="col-md-5">
                            <label for="student mobile" class="form-label">Mobile Number</label>
                            <input type="number" class="form-control form-control-sm" name="mobile" id="" value="">
                            @error('mobile')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-7">
                            <label for="student address" class="form-label">Address</label>
                            <input type="text" class="form-control form-control-sm" name="address" id="studentname" value="">
                            @error('address')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection