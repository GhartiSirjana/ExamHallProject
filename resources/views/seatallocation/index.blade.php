@extends('layouts.admin')
@section('content')

<div class="container">
<br/> <br/><br/>
<h1> Seat Allocation </h1> 


{{session('msg')}}
<br/>
<a href="{{ route('seatallocations.create') }}" class="btn btn-primary"> ADD Seat </a> 
<br/><br/>
<table class="table  table-bordered table-striped table-hover">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Exams</th>
    <th>Rooms</th>
    <th>Action</th>
</tr>
@foreach($seatallocations as $seatallocation)
<tr>
<td> {{$seatallocation->id}} </td>
<td> {{$seatallocation->name}} </td>
<td> {{$seatallocation->exam}} </td>
<td> {{$seatallocation->rooms}} </td>

<td>
<a href="{{ route('seatallocations.edit', $seatallocation->id) }}" class="btn btn-primary"> edit</a>
<a href="{{ route('seatallocations.delete', $seatallocation->id) }}" class="btn btn-danger"> delete</a>
</td>
</tr>
@endforeach
</table>
</div>
    

@endsection