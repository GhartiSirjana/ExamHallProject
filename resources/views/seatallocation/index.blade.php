@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-10 offset-md-1 mt-3">
        <h3 class="fs-5">Seat Allocation</h3>
        {{session('msg')}}
        <a class="btn btn-info btn-sm" href="{{ route('seatallocations.create') }}" class="btn btn-primary btn-sm"> Add Seat </a>

        <table class="table mt-3 table-bordered">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Rooms</th>
                    <th>Exams</th>
                    <th>Action</th>
                </thead>
            </tr>
            @foreach($seatallocations as $seatallocation)
            <tr>
                <tbody>
                    <td> {{$seatallocation->id}} </td>
                    <td> {{$seatallocation->room->roomno}} </td>
                    <td> {{$seatallocation->exam}}</td>

                    <td>
                        <a href="{{ route('seatallocations.show', $seatallocation->id) }}" class="btn btn-info">View Arrangement</a>
                        <a href="{{ route('seatallocations.edit', $seatallocation->id) }}" class="btn btn-primary"> edit</a>
                        <a href="{{ route('seatallocations.delete', $seatallocation->id) }}" class="btn btn-danger"> delete</a>
                    </td>
                </tbody>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</div>


@endsection