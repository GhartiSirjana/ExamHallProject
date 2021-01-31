@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href ="{{ asset('css/app.css')}}" rel="stylesheet">
    <title>Seat Allocation Show</title>
</head>
<body>
<div class="container">
<br/> <br/><br/>
<h1> Seat Allocation </h1> 


{{session('msg')}}
<br/>
<a href="seatallocation_create" class="btn btn-primary"> ADD Faculty </a> 
<br/><br/>
<table class="table  table-bordered table-striped table-hover">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Exams</th>
    <th>Rooms</th>
   
    <th>Action</th>
</tr>
@foreach($seatallocationarr as $seatallocation)
<tr>
<td> {{$seatallocation->id}} </td>
<td> {{$seatallocation->Name}} </td>
<td> {{$seatallocation->Exam}} </td>
<td> {{$seatallocation->Rooms}} </td>

<td>
<a href="seatallocation_delete/{{$seatallocation->id}}" class="btn btn-primary"> Delete</a>
<a href="seatallocation_edit/{{$seatallocation->id}}" class="btn btn-danger"> edit</a>
</td>
</tr>
@endforeach
</table>
</div>
    
</body>
</html>
@endsection