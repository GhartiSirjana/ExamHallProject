@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-4">College</h3>
        <a class="btn btn-info btn-sm" href="{{ route('colleges.create') }}">Add College</a>
        <table class="table mt-3 table-bordered">
            <tr>
            <thead>
                <th>ID</th>
                <th>CollegeName</th>
                <th>Address</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            </tr>
            @foreach($colleges as $college)
            <tr>
            <tbody>
                <td>{{$college->id}}</td>
                <td>{{$college->name}}</td>
                <td>{{$college->address}}</td>
                <td>{{$college->description}}</td>
                <td>
                    
                    <a href="{{route('colleges.edit', $college->id)}}" class="btn btn-primary btn-sm"> Edit</a>
                    <a href="{{route('colleges.destroy', $college->id)}}" class="btn btn-danger btn-sm"> Delete</a>
                </td>
            </tbody>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection