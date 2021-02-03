@extends('layouts.admin')

@section('content')

<div class="container">
    <h1> FACULTY </h1>

    {{ session('msg') }}
    <br />
    <a href="{{ route('faculties.create') }}" class="btn btn-primary"> ADD Faculty </a>
    <br /><br />
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Short Name</th>
            <th>Department</th>
            <th>Created_at</th>
            <th>Action</th>
        </tr>
        @foreach ($faculties as $faculty)
            <tr>
                <td> {{ $faculty->id }} </td>
                <td> {{ $faculty->name }} </td>
                <td> {{ $faculty->short_name }} </td>
                <td> {{ $faculty->department->department_name }} </td>
                <td> {{ $faculty->created_at }} </td>
                <td>
                    <a href="{{ route('faculties.edit', $faculty->id) }}" class="btn btn-danger"> edit</a>
                    <a href="{{ route('faculties.destroy', $faculty->id) }}" class="btn btn-primary"> Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection
