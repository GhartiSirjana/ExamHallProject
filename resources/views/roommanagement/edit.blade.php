@extends('layouts.admin')
@section('content')
    <div class="col-md-6 offset-md-3">
        <div class="card">

        <div class="card-header">Add Room</div>
        <div class="card-body">
            <form method="POST" action="{{ route('room.update', $room->id) }}">
            @csrf
            <div class="mb-3">
                        <label for="room" class="form-label">Room No</label>
                        <input type="text" name="room" class="form-control" value="{{$room->room}}" id="room" >
                        @error('room')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="block" class="form-label">Block</label>
                    <input type="text"name="block" class="form-control" value="{{$room->block}}" id="block">
                    @error('block')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Floor" class="form-label">floor</label>
                    <input type="text" name = "floor" class="form-control" id="floor">
                    @error('floor')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="mb-3">
                        <label for="roomcapacity" class="form-label">Room capacity</label>
                        <input type="number" name="roomcapacity" class="form-control" value="{{$room->roomcapacity}}" id="roomcapacity" >
                        @error('roomcapacity')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                        <label for="rows" class="form-label">No of rows</label>
                        <input type="number" name="rows" class="form-control" value="{{$room->rows}}"id="rows" >
                        @error('rows')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="mb-3">
                        <label for="column" class="form-label">No of column</label>
                        <input type="number" name="column" class="form-control" value="{{$room->column}}" id="column" >
                        @error('column')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                        <label for="invigilator" class="form-label">Invigilator</label>
                        <input type="text" name="invigilator" class="form-control" value="{{$room->invigilator}}" id="invigilator" >
                        @error('invigilator')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
                    
        </div>
    </div>
</div>
@endsection