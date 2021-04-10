@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row my-3">
                <div class="col-md-10">
                    <h4>Floor Management</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('room.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Manage Floor</div>
                <div class="card-body">
                    <form method="POST" class="row g-3 mb-4" action="{{route('floor.store')}}">
                        @csrf
                    
                        <div class="col-md-6">
                            <label for="">Floor</label>
                            <input type="text" name="floor" class="form-control form-control-sm">
                            @error('floor')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="room" class="form-label">Block Name</label>
                            <select class="form-select form-control form-control-sm" id="block" name="block">
                            @foreach($blocks as $block)
                                <option value="{{$block->id}}">{{$block->block}}</option>
                            @endforeach
                            </select>
                            @error('block')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-2 ml-auto">
                            <button class="btn btn-primary btn-sm">Add Floor</button>
                        </div>
                    </form>
                    <table class="table table-boarder">
                        <tr>
                            <th>#ID</th>
                            <th>Floor</th>
                            <th>Block</th>
                            <th>Action</th>
                        </tr>
                        @foreach($floors as $floor)
                        <tr>
                            <tbody>
                                <td>{{$floor->id}}</td>
                                <td>{{$floor->floor}}</td>
                                <td>{{$floor->block->block_id}}</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tbody>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection