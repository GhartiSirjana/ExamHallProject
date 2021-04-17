@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row my-3">
                <div class="col-md-10">
                    <h4>Block Management</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('room.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Manage Block</div>
                <div class="card-body">
                    <form method="POST" class="row g-3 mb-4" action="{{route('block.store')}}">
                        @csrf
    
                        <div class="col-md-12">
                            <label for="room" class="form-label">Block Name</label>
                            <input type="text" name="block" class="form-control form-control-sm" id="block">
                            @error('block')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-2 ml-auto">
                            <button class="btn btn-primary btn-sm"> Block</button>
                        </div>
                    </form>
                    <table class="table table-boarder">
                        <tr>
                            <th>#ID</th>
                            <th>Block Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach($blocks as $block)
                        <tr>
                            <tbody>
                                <td>{{$block->id}}</td>
                                <td>{{$block->block}}</td>
                                <td>
                                    <a href="{{route('block.edit', $block->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                        <form action="{{route('block.destroy', $block['id'])}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="Delete">
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

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