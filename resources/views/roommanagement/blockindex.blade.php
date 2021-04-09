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
                    <form method="POST" class="row g-3 mb-4" action="{{route('room.store')}}">
                        @csrf
                        <div class="col-md-12">
                            <label for="room" class="form-label">Block Name</label>
                            <input type="text" name="block" class="form-control form-control-sm" id="block">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary btn-sm">Add Block</button>
                        </div>
                    </form>
                    <table class="table table-boarder">
                        <tr>
                            <th>#ID</th>
                            <th>Block Name</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <tbody>
                                <td>1</td>
                                <td>Science</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tbody>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection