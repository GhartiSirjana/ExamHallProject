@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-5"> Subjects</h3>
        {{session('msg')}}
        <a class="btn btn-info btn-sm" href="{{route('subjects.create')}}" class="btn btn-primary"> ADD subject </a>
        <table class="table mt-3 table-bordered">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>SubjectName</th>
                    <th>SubjectCode</th>
                    <th>Semester</th>
                    <th>Faculty</th>
                    <th>Department</th>
                    <th>Created_at</th>
                    <th colspan="2">Action</th>
                </thead>
            </tr>

            @foreach($subjects as $subject)
            <tr>
                <tbody>
                    <td> {{$subject->id}} </td>
                    <td> {{$subject->subjectname}} </td>
                    <td> {{$subject->subjectcode}} </td>
                    <td> {{$subject->semester}} </td>
                    <td> {{$subject->faculty->name}} </td>
                    <td> {{$subject->department->department_name}} </td>

                    <td> {{$subject->created_at}} </td>
                    <td>
                        <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-primary btn-sm"> edit</a>
                    </td>
                    <td>
                        <form action="{{route('subjects.destroy', $subject['id'])}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="Delete">
                            <button type="submit" name="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete')">Delete</button>
                        </form>

                    </td>
                </tbody>
            </tr>
            @endforeach
        </table>
    </div>
</div>


@endsection