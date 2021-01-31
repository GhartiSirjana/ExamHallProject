@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-5">Staff Management</h3>
        <button class="btn btn-info btn-sm">Add Staff</button>
        <table class="table table-bordered mt-3">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Action</th>
                </thead>
            </tr>
            <tr>
                <tbody>
                    <td>1</td>
                    <td>Sirjana</td>
                    <td>CSIT</td>
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