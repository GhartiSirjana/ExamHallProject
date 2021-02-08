@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="ml-1 col-md-12">
        <h3 class="fs-5">Student Management</h3>
        <a class="mb-3 btn btn-info btn-sm" href="{{ route('student.create') }}">Add Student</a>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>College</th>
                    <th>Department</th>
                    <th>Faculty</th>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>Registration No.</th>
                    <th>Symbol No.</th>
                    <th>DOB</th>
                    <th>Parent Name</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>Address</th>
                    <th>Action</th>
                </thead>
            </tr>
            @foreach($students as $student)
            <tr>
                <tbody>
                    <td>{{$student->id}}</td>
                    <td>{{$student->s_name}}</td>
                    <td>{{$student->s_college}}</td>
                    <td>{{$student->s_department}}</td>
                    <td>{{$student->s_faculty}}</td>
                    <td>{{$student->s_year}}</td>
                    <td>{{$student->s_semester}}</td>
                    <td>{{$student->s_registration}}</td>
                    <td>{{$student->s_symbolno}}</td>
                    <td>{{$student->s_dob}}</td>
                    <td>{{$student->s_parent}}</td>
                    <td>{{$student->s_email}}</td>
                    <td>{{$student->s_mobile}}</td>
                    <td>{{$student->s_address}}</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">View</a>
                        <a href="" class="btn btn-info btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tbody>
            </tr>
            @endforeach
        </table>

    </div>
</div>

@endsection
