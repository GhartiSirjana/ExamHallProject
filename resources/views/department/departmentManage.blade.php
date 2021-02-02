@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-5">Staff Management</h3>
        <a class="btn btn-info btn-sm" href="{{ route('examhallproject.departmentadd') }}">Add Department</a>
        <table class="table table-bordered mt-3">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>
            </tr>
            @foreach($departs as $depart)
            <tr>
                <tbody>
                    <td>{{$depart->id}}</td>
                    <td>{{$depart->department_name}}</td>
                    <td>{{$depart->department_code}}</td>
                    <td>{{str_limit($depart->description, $limit = 20)}}</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">View</a>
                        <a href="/department-edit/{{$depart->id}}" class="btn btn-info btn-sm">Edit</a>
                        <a href="/department-delete/{{$depart->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure')">Delete</a>
                    </td>
                </tbody>
            </tr>
            @endforeach
        </table>
        <style>
            .w-5
            {
                display: none;
            }
        </style>
    </div>
</div>
@endsection