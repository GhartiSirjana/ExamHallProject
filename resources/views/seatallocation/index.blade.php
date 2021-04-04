@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-5">Seat Allocation</h3>


{{session('msg')}}
<br/>
<a class="btn btn-info btn-sm" href="{{ route('seatallocations.create') }}" class="btn btn-primary"> ADD Seat </a> 
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
</div>
</div>
    

@endsection