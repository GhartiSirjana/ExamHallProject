@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-5">Faculty</h3>
        <!-- {{ session('msg') }} -->
        <a class="btn btn-info btn-sm" href="{{ route('faculties.create') }}">Add Faculty</a>
        <table class="table mt-3 table-bordered">

            <tr>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Short Name</th>
                    <th>Department</th>
                    <th colspan="2">Action</th>
                </thead>
            </tr>
            @foreach ($faculties as $faculty)
            <tr>
                <tbody>
                    <td> {{ $faculty->id }} </td>
                    <td> {{ $faculty->name}} </td>
                    <td> {{ $faculty->short_name }} </td>
                    <td> {{ $faculty->department->department_name }} </td>
                    <td>
                        <a href="{{ route('faculties.edit', $faculty->id) }}" class="btn btn-primary btn-sm"> edit</a>
                    </td>
                    <td>
                        <form action="{{route('faculties.destroy', $faculty['id'])}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="Delete">
                            <button type="submit" name="submit" onclick="return confirm('Are you Sure')" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </td>
                </tbody>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection