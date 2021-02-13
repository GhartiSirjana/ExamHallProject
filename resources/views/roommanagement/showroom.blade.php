@extends('layouts.admin')
@section('content')
<h1 class = "h3">Room  management</h1>
{{session('msg')}}
<a href="addroom" class="btn btn-primary"> Add room </a> 
<a href="addblock" class="btn btn-primary"> Add Block </a> 
<a href="" class="btn btn-primary"> Add Floor </a> 

<table class="table  table-bordered table-striped table-hover">
<tr>
    <th>ID</th>
    <th>Room No</th>
    <th>Block</th>
    <th>Floor</th>
    <th>Capacity</th>
    <th>No of Rows</th>
    <th>No of columns</th>
    <th>Action</th>


</tr>
@foreach($roommanagementarr as $roommanagment)
<tr>
<td>{{$roommanagment->id}}</td>
<td>{{$roommanagment->room_no}}</td>
<td>{{$roommanagment->block}}</td>
<td>{{$roommanagment->floor}}</td>
<td>{{$roommanagment->capacity}}</td>
<td>{{$roommanagment->no_of_rows}}</td>
<td>{{$roommanagment->no_of_colums}}</td>





<td>
<a href="room_delete/{{$roommanagment->id}}" class="btn btn-primary"> Delete</a>
<a href="" class="btn btn-danger"> edit</a>
</td>
</tr>
@endforeach
</table>
@endsection