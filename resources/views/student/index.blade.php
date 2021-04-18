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
                    <th>Registration</th>
                    <th>Symbol</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>Parent Name</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th colspan="2">Action</th>
                </thead>
            </tr>
            @foreach($students as $student)
            <tr>
                <tbody>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->college->name}}</td>
                    <td>{{$student->department->department_name}}</td>
                    <td>{{$student->faculty->name}}</td>
                    <td>{{$student->year}}</td>
                    <td>{{$student->semester}}</td>
                    <td>{{$student->registerNumber}}</td>
                    <td>{{$student->symbolno}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->parent}}</td>
                    <td>{{$student->mobile}}</td>
                    <td>{{$student->address}}</td>
                    <td>
                        <a href="{{route('student.edit', $student->id)}}" class="btn btn-info btn-sm">Edit</a>
                    </td>
                        <td>
                        <form action="{{route('student.destroy', $student['id'] )}}" method="post">
                            {{
                                csrf_field()
                            }}
                            <input type="hidden" name="_method" value="Delete">
                            <button type="submit" name="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to Delete')">Delete</button>
                        </form>

                    </td>
                </tbody>
            </tr>
            @endforeach
        </table>

    </div>
</div>

@endsection
