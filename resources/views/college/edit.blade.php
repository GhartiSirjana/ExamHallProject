@extends('layouts.admin')
@section('content')
    <div class="col-md-6 offset-md-3">
        <div class="card">

        <div class="card-header">Update College/Campus</div>
        <div class="card-body">
            <form method="post" action="{{route('college.editcollege', [$addcollegearr->id])}}">
            @csrf
                <div class="mb-3">
                    <label>College/Campus Name</label>
                    <input type="text" name="college" class="form-control" id="collegecampus"value="{{$addcollegearr->name}}" >
                    @error('collegename')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Address</label>
                    <input type="text" name = "address" class="form-control" id="address"value="{{$addcollegearr->address}}" >
                </div>
                <div class="mb-3">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" id="Desc" value="{{$addcollegearr->description}}" >
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn">Close</button>

            </form>
        </div>
                    
        </div>
    </div>
</div>
@endsection