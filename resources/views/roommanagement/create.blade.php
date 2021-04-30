@extends('layouts.admin')
@section('content')

@if($errors->any())
@foreach($errors->all() as $error)
<div>
    <span class="text-danger">{{$error}}</span>
</div>
@endforeach
@endif
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
                            <label for="room" class="form-label">Room No</label>
                            <input type="text" name="roomno" class="form-control form-control-sm" id="room">
                          
                        </div>
                        <div class="col-md-6">
                            <label for="room" class="form-label">Block</label>
                            <select class="form-select form-control form-control-sm" name="block_id" class="form-control" id="block">
                                @foreach($blocks as $block)
                                <option value="{{$block->id}}">{{$block->block}}</option>
                                @endforeach
                               
                              
                            </select>
                         
                        </div>

                        <div class="col-md-6">
                            <label for="block" class="form-label">Floor</label>
                            <select class="form-select form-control form-control-sm" name="floor_id" class="form-control" id="block">
                                @foreach($floors as $floor)
                                <option value="{{$floor->id}}">{{$floor->floor}}</option>
                                @endforeach
                            
                            </select>

                        </div>

    

                        <div class="col-md-6">
                            <label for="roomcapacity" class="form-label">Room capacity</label>
                            <input type="number" name="capacity" class="form-control form-control-sm" id="roomcapacity">

                            @error('capacity')
                                <span class="text-danger">{{$message}}</span>
                                @enderror

                            <!-- @error('capacity')
                            <div>
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror -->

                        </div>
                        <div class="col-md-6">
                            <label for="rows" class="form-label">No of rows</label>
                            <input type="number" name="rows" class="form-control form-control-sm" id="rows">

                            @error('rows')
                                <span class="text-danger">{{$message}}</span>
                                @enderror

                            <!-- @error('rows')
                            <div>
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror -->

                        </div>

                        <div class="col-md-6">
                            <label for="column" class="form-label">No of column</label>
                            <input type="number" name="columns" class="form-control form-control-sm" id="column">

                            @error('columns')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="invigilator" class="form-label">Invigilator</label>
                            <select class="form-select form-control form-control-sm" name="staff_id" class="form-control" id="block">

                            <!-- @error('columns')
                            <div>
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror -->

                        </div>
                        <div class="col-md-12">
                            <label for="invigilator" class="form-label">Invigilator</label>
                            <select class="form-select form-control form-control-sm" name="staff_id" class="form-control" id="staff">

                                @foreach($staffs as $staff)
                                <option value="{{$staff->id}}">{{$staff->staffname}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" name="staff_id" class="form-control form-control-sm" id="invigilator"> -->
                            @error('invigilator')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-sm">Add room</button>       
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection