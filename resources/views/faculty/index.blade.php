@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-5">Faculty</h3>
        <!-- {{ session('msg') }} -->
        <a class="btn btn-info btn-sm" href="{{ route('faculties.create') }}">Add Faculty</a>
        <table class="table mt-3 table-bordered">

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
                    <a href="{{ route('faculties.edit', $faculty->id) }}" class="btn btn-primary btn-sm"> edit</a>
                    <a href="{{ route('faculties.destroy', $faculty->id) }}" class="btn btn-danger btn-sm"> Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection