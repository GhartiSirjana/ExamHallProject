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
                            <select class="form-select form-control form-control-sm" id="block" name="block_id">
                            @foreach($blocks as $block)
                                <option value="{{$block->id}}">{{$block->block}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="block" class="form-label">Floor</label>
                            <select class="form-select form-control form-control-sm" id="block" name="floor_id">
                            @foreach($floors as $floor)
                                <option value="{{$floor->id}}">{{$floor->floor}}</option>
                            @endforeach
                            </select>

                        </div>

                        <div class="col-md-6">
                            <label for="room" class="form-label">Room No</label>
                            <input type="text" name="roomno" class="form-control form-control-sm" id="room">
                        </div>

                        <div class="col-md-6">
                            <label for="roomcapacity" class="form-label">Room capacity</label>
                            <input type="number" name="capacity" class="form-control form-control-sm" id="roomcapacity">
                        </div>
                        <div class="col-md-6">
                            <label for="rows" class="form-label">No of rows</label>
                            <input type="number" name="rows" class="form-control form-control-sm" id="rows">
                        </div>

                        <div class="col-md-6">
                            <label for="column" class="form-label">No of column</label>
                            <input type="number" name="columns" class="form-control form-control-sm" id="column">
                        </div>
                        <div class="col-md-6">
                            <label for="invigilator" class="form-label">Invigilator</label>
                            <input type="text" name="invigilator" class="form-control form-control-sm" id="invigilator">
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