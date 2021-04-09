@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-4">College</h3>
        <a class="btn btn-info btn-sm" href="{{ route('college.create') }}">Add College</a>
        <table class="table mt-3 table-bordered">
            <tr>
                <th>ID</th>
                <th>CollegeName</th>
                <th>Address</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach($colleges as $college)
            <tr>
                <td>{{$college->id}}</td>
                <td>{{$college->name}}</td>
                <td>{{$college->address}}</td>
                <td>{{$college->description}}</td>
                <td>
                    <a href="{{route('college.show', $college->id)}}" class="btn btn-info btn-sm">View</a>
                    <a href="{{route('college.edit', $college->id)}}" class="btn btn-primary btn-sm"> Edit</a>
                    <a href="{{route('college.destroy', $college->id)}}" class="btn btn-danger btn-sm"> Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection