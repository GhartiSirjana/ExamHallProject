@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href ="{{ asset('css/app.css')}}" rel="stylesheet">
    <title>Subject Show</title>
</head>
<body>
<div class="container">
<br/> <br/><br/>
<h1> Subjects </h1> 


{{session('msg')}}
<br/>
<a href="subject_create" class="btn btn-primary"> ADD subject </a> 
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
@foreach($subjectarr as $subject)
<tr>
<td> {{$subject->id}} </td>
<td> {{$subject->SubjectName}} </td>
<td> {{$subject->SubjectCode}} </td>
<td> {{$subject->Semester}} </td>
<td> {{$subject->faculty}} </td>
<td> {{$subject->department}} </td>
<td> {{$subject->created_at}} </td>
<td>
<a href="subject_delete/{{$subject->id}}" class="btn btn-primary"> Delete</a>
<a href="subject_edit/{{$subject->id}}" class="btn btn-danger"> edit</a>
</td>
</tr>
@endforeach
</table>
</div>
    
</body>
</html>
@endsection