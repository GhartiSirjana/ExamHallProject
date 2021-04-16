@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row my-3">
                <div class="col-md-10">
                    <h4>Add New Room</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('room.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Add Room</div>
                <div class="card-body">
                    <form method="POST" class="row g-3" action="{{route('room.store')}}">
                        @csrf

                        <div class="col-md-6">
                            <label for="room" class="form-label">Block</label>
<<<<<<< HEAD
                            <select class="form-select form-control form-control-sm" id="block" name="block_id">
                            @foreach($blocks as $block)
                                <option value="{{$block->id}}">{{$block->block}}</option>
                            @endforeach
=======
                            <select class="form-select form-control form-control-sm" name="block_id" class="form-control" id="block">
                                <option value="">one</option>
>>>>>>> 3c87a62139acbdbbb7ade569943af02168fb674e
                            </select>
                            @error('block_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="block" class="form-label">Floor</label>
<<<<<<< HEAD
                            <select class="form-select form-control form-control-sm" id="block" name="floor_id">
                            @foreach($floors as $floor)
                                <option value="{{$floor->id}}">{{$floor->floor}}</option>
                            @endforeach
                            @error('floor_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
=======
                            <select class="form-select form-control form-control-sm" name="floor_id" class="form-control" id="block">
                                <option value="">one</option>
                                <option value="">two</option>
>>>>>>> 3c87a62139acbdbbb7ade569943af02168fb674e
                            </select>

                        </div>

                        <div class="col-md-6">
                            <label for="room" class="form-label">Room No</label>
                            <input type="text" name="roomno" class="form-control form-control-sm" id="room">
                            @error('roomno')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="roomcapacity" class="form-label">Room capacity</label>
                            <input type="number" name="capacity" class="form-control form-control-sm" id="roomcapacity">
                            @error('capacity')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="rows" class="form-label">No of rows</label>
                            <input type="number" name="rows" class="form-control form-control-sm" id="rows">
                            @error('rows')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="column" class="form-label">No of column</label>
                            <input type="number" name="columns" class="form-control form-control-sm" id="column">
                            @error('columns')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="invigilator" class="form-label">Invigilator</label>
                            <input type="text" name="invigilator" class="form-control form-control-sm" id="invigilator">
                            @error('invigilator')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>

                        <div class="col-md-3 mt-3">
                            <button type="submit" class="btn btn-primary btn-sm">Add room</button>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn">Close</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection