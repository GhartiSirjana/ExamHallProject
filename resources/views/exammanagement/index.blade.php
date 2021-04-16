@extends('layouts.admin')
@section('content')
<h1 class="h3">Exam management</h1>
{{session('msg')}}
<a href="{{ route('exam.create') }}" class="btn btn-info btn-sm"> Add Exam </a>
<table class="table mt-3 table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Department</th>
        <th>Faculty</th>
        <th>Subject</th>
        <th>Semester</th>
        <th>Exam Date</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th colspan="2">Action</th>


    </tr>
    @foreach($exams as $exam)
    <tr>
        <td>{{$exam->id}}</td>
        <td>{{$exam->Name}}</td>
        <td>{{$exam->department->department_name}}</td>
        <td>{{$exam->faculty->name}}</td>
        <td>{{$exam->subject->subjectname}}</td>
        <td>{{$exam->subject->semester}}</td>
        <td>{{$exam->Exam_Date}}</td>
        <td>{{$exam->Start_Time}}</td>
        <td>{{$exam->End_Time}}</td>




        <td>
            <a href="{{route('exam.edit', $exam->id)}}" class="btn btn-primary btn-sm"> Edit</a>
        </td>
        <!-- <a href="{{route('exam.destroy', $exam->id)}}" class="btn btn-danger btn-sm"> Delete</a> -->
        <td>
            <form action="{{route('exam.destroy', $exam['id'])}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="Delete">
                <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>

        </td>
    </tr>
    @endforeach
</table>
@endsection