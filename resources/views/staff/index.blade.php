@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-5">Staff Management</h3>
        <a class="btn btn-info btn-sm" href="{{ route('staff.create') }}">Add Staff</a>
        <table class="table table-bordered mt-3">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th colspan="2">Action</th>
                </thead>
            </tr>
            <tbody>
                @foreach($staffs as $staff)
                <tr>
                    <td>{{ $staff->id }}</td>
                    <td>{{ $staff->staffname }}</td>
                    <td>{{ $staff->department->department_name}}</td>
                    <td>
                        
                        <a href="{{ route('staff.edit', $staff->id) }}" class="btn btn-info btn-sm">Edit</a>
                    </td>
                        <!-- <a href="{{ route('staff.destroy', $staff->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure')">Delete</a> -->
                        <td>
                        <form action="{{route('staff.destroy', $staff['id'])}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="Delete">
                            <button type="submit" name="submit" onclick="return confirm('Are you Sure')" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </td>
                    @endforeach
            </tbody>
            </tr>
        </table>
  
    </div>
</div>
@endsection