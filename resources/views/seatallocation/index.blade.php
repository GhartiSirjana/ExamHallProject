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
                    <th colspan="3" class="text-center">Action</th>
                </thead>
            </tr>
            <!-- @php
            print_r($seatallocations);
            @endphp -->
            @foreach($seatallocations as $seatallocation)
            <tr>
                <tbody>
                    <td> {{$seatallocation->id}} </td>
                    <td> {{$seatallocation->name}} </td>
                    <td> @foreach($seatallocation->selectedRooms as $room) {{ $room->roomno }} @endforeach</td>
                    <td> @foreach($seatallocation->selectedExams as $exam) {{ $exam->Name }} @endforeach</td>
                    <td>
                        <a href="{{ route('seatallocations.show', $seatallocation->id) }}" class="btn btn-primary btn-sm"> View Arrangement</a>
                    </td>
                    <td>
                        <a href="{{ route('seatallocations.edit', $seatallocation->id) }}" class="btn btn-primary btn-sm"> edit</a>
                    </td>
                    <td>
                        <form action="{{route('seatallocations.destroy', $seatallocation['id'])}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="Delete">
                            <button type="submit" name="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to Delete')">Delete</button>
                        </form>

                    </td>
                </tbody>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</div>


@endsection