@extends('layouts.admin')
@section('content')
<h1 class = "h3">Exam management</h1>
{{session('msg')}}
<a href="{{ route('exam.create') }}" class="btn btn-info btn-sm"> Add Exam </a> 
<table class="table mt-3 table-bordered">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Faculty</th>
    <th>Semester</th>
    <th>Subject</th>
    <th>Exam Date</th>
    <th>Start Time</th>
    <th>End Time</th>
    <th>Action</th>


</tr>
@foreach($exams as $exam)
<tr>
<td>{{$exam->id}}</td>
<td>{{$exam->Name}}</td>
<td>{{$exam->Faculty}}</td>
<td>{{$exam->semester}}</td>
<td>{{$exam->subject}}</td>
<td>{{$exam->Exam_Date}}</td>
<td>{{$exam->Start_Time}}</td>
<td>{{$exam->End_Time}}</td>




<td>
    <a href="editexam/{{$exam->id}}" class="btn btn-primary btn-sm"> Edit</a>
<a href="exam_delete/{{$exam->id}}" class="btn btn-danger btn-sm"> Delete</a>
</td>
</tr>
@endforeach
</table>
@endsection