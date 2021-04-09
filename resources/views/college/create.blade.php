@extends('layouts.admin')
@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="mb-3 row">
                <div class="col-md-10">
                    <h4>Add New College</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('colleges.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">Add New College/Campus</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('colleges.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="collegecampus" class="form-label">College/Campus Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="collegecampus">
                            @error('name')
                            <div class="alert alert-danger">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control form-control-sm" id="address">
                            @error('address')
                            <div class="alert alert-danger">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="productDesc" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control form-control-sm" id="Desc">
                            @error('description')
                            <div class="alert alert-danger">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Add College</button>
                        <!-- <button type="submit" class="btn">Close</button> -->

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection