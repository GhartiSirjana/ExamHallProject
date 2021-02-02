@extends('layouts.admin')
@section('content')
    <div class="col-md-6 offset-md-3">
        <div class="card">

        <div class="card-header">Add New College/Campus</div>
        <div class="card-body">
            <form method="post" action="college_submit">
            @csrf
                <div class="mb-3">
                    <label>College/Campus Name</label>
                    <input type="text" name="college" class="form-control" id="collegecampus">
                    @error('collegename')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Address</label>
                    <input type="text" name = "address" class="form-control" id="address">
                </div>
                <div class="mb-3">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" id="Desc" >
                </div>
                
                <button type="submit" class="btn btn-primary">Addcollege/campus</button>
                <button type="submit" class="btn">Close</button>

            </form>
        </div>
                    
        </div>
    </div>
</div>
@endsection