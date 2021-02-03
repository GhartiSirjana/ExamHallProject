@extends('layouts.admin')
@section('content')

<div class="container">
<br/> <br/><br/>
<h1> Subjects </h1> 


{{session('msg')}}
<br/>
<a href="{{route('subjects.create')}}" class="btn btn-primary"> ADD subject </a> 
<br/><br/>
<table class="table  table-bordered table-striped table-hover">
<tr>
    <th>ID</th>
    <th>SubjectName</th>
    <th>SubjectCode</th>
    <th>Semester</th>
    <th>Faculty</th>
    <th> Department</th>
    <th>Created_at</th>
    <th>Action</th>
</tr>
@foreach($subjects as $subject)
<tr>
<td> {{$subject->id}} </td>
<td> {{$subject->subjectname}} </td>
<td> {{$subject->subjectcode}} </td>
<td> {{$subject->semester}} </td>
<td> {{$subject->faculty}} </td>
<td> {{$subject->department}} </td>
<td> {{$subject->created_at}} </td>
<td>
<a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-danger"> edit</a>
<a href="{{ route('subjects.destroy', $subject->id) }}" class="btn btn-primary"> Delete</a>
</td>
</tr>
@endforeach
</table>
</div>
    

@endsection