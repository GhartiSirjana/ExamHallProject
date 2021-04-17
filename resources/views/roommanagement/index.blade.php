@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-5 mb-3">Room management</h3>
        <!-- {{ session('msg') }} -->
        <a href="{{route('room.create')}}" class="btn btn-primary btn-sm"> Add room </a>
        <a href="{{route('block.index')}}" class="btn btn-primary btn-sm"> Add Block </a>
        <a href="{{route('floor.index')}}" class="btn btn-primary btn-sm"> Add Floor </a>

        <table class="table table-bordered mt-3">
            <tr>
                <th>ID</th>
                <th>Room No</th>
                <th>Block</th>
                <th>Floor</th>
                <th>Capacity</th>
                <th>No of Rows</th>
                <th>No of columns</th>
                <th>Invigilator</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach($rooms as $room)
            <tr>
                <td>{{$room->id}}</td>
                <td>{{$room->roomno}}</td>
                <td>{{$room->block->block}}</td>
                <td>{{$room->floor->floor}}</td>
                <td>{{$room->capacity}}</td>
                <td>{{$room->rows}}</td>
                <td>{{$room->columns}}</td>
                <td>{{$room->staff->staffname}}</td>
                <td>
                    <a href="{{route('room.edit', $room->id)}}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                    <a href="{{route('room.destroy', $room->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    <td>
                        <form action="{{route('room.destroy', $room['id'])}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="Delete">
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection