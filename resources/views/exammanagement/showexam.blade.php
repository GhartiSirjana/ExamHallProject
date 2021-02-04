@extends('layouts.admin')
@section('content')
<h1> FACULTY </h1>
{{session('msg')}}
<a href="createexam" class="btn btn-primary"> Add Exam </a> 
<table class="table  table-bordered table-striped table-hover">
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
@foreach($exammanagementarr as $exammanagment)
<tr>
<td>{{$exammanagment->id}}</td>
<td>{{$exammanagment->Name}}</td>
<td>{{$exammanagment->Faculty}}</td>
<td>{{$exammanagment->semester}}</td>
<td>{{$exammanagment->subject}}</td>
<td>{{$exammanagment->Exam_Date}}</td>
<td>{{$exammanagment->Start_Time}}</td>
<td>{{$exammanagment->End_Time}}</td>




<td>
<a href="exam_delete/{{$exammanagment->id}}" class="btn btn-primary"> Delete</a>
<a href="editexam/{{$exammanagment->id}}" class="btn btn-danger"> edit</a>
</td>
</tr>
@endforeach
</table>
@endsection