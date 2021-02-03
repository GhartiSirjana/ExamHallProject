@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12 ml-1">
        <h3 class="fs-5">Student Management</h3>
        <a class="btn btn-info btn-sm mb-3" href="{{ route('examhallproject.studentadd') }}">Add Student</a>
           
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
            <tr>
                <tbody>
                    <td>1</td>
                    <td>Mina</td>
                    <td>BMC</td>
                    <td>CSIT</td>
                    <td>Science</td>
                    <td>2073</td>
                    <td>5th</td>
                    <td>9-34-56-2016</td>
                    <td>11871</td>
                    <td>2055-2-14</td>
                    <td>Gharti</td>
                    <td>gharti@gmail.com</td>
                    <td>9856034534</td>
                    <td>Palpa</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">View</a>
                        <a href="" class="btn btn-info btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tbody>
            </tr>
        </table>

    </div>
</div>

@endsection