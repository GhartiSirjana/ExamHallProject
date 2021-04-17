@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row mb-3">
                <div class="col-md-10">
                    <h4>Update College/Campus</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('colleges.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
        <div class="card-body">
            <form method="post" action="{{ route('colleges.update', $college->id) }}">
            @csrf
            @method('put')
                <div class="mb-3">
                    <label>College/Campus Name</label>
                    <input type="text" name="name" class="form-control" id="collegecampus"value="{{$college->name}}" >
                    @error('name')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Address</label>
                    <input type="text" name = "address" class="form-control" id="address"value="{{ $college->address}}" >
                </div>
                <div class="mb-3">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" id="Desc" value="{{$college->description}}" >
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn">Close</button>

            </form>
        </div>
                    
        </div>
    </div>
</div>

</div>
@endsection