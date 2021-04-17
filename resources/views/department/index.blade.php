@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-5">Departments</h3>
        <a class="btn btn-info btn-sm" href="{{ route('departments.create') }}">Add Department</a>
        <table class="table mt-3 table-bordered">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Description</th>
                    <th>No of Faculties</th>
                    <th colspan="2">Action</th>
                </thead>
            </tr>
            @foreach($department as $depart)
            <tr>
                <tbody>
                    <td>{{ $depart->id }}</td>
                    <td>{{ $depart->department_name }}</td>
                    <td>{{ $depart->department_code }}</td>
                    <td>{{ Str::limit($depart->description, $limit = 20)}}</td>
                    <td>{{$depart->faculties->count()}}</td>
                    <td>
                        <!-- <a href="{{ route('departments.show', $depart->id) }}" class="btn btn-success btn-sm">View</a> -->
                        <a href="{{ route('departments.edit', $depart->id) }}" class="btn btn-info btn-sm">Edit</a>
                    </td>
                    <!-- <a href="{{ route('departments.destroy', $depart->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure')">Delete</a> -->
                    <td>
                        <form action="{{route('departments.destroy', $depart['id'])}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="Delete">
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </td>
                    
                </tbody>
            </tr>
            @endforeach
        </table>
        <style>
            .w-5 {
                display: none;
            }
        </style>
    </div>
</div>
@endsection