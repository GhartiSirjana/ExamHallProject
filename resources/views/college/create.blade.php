@extends('layouts.admin')
@section('content')
    <div class="col-md-6 offset-md-3">
        <div class="card">
        <div class="card-header">Add New College/Campus</div>
        <div class="card-body">
            <form method="POST" action="{{ route('college.store') }}">
<<<<<<< HEAD:resources/views/college/create.blade.php
                @csrf
                <div class="mb-3">
                    <label for="collegecampus" class="form-label">College/Campus Name</label>
                    <input type="text" name = "name" class="form-control" id="collegecampus">
=======
            @csrf
                <div class="mb-3">
                    <label for="collegecampus" class="form-label">College/Campus Name</label>
                    <input type="text"name="name" class="form-control" id="collegecampus">
>>>>>>> 8937d950d7114bf503d2a31171a8fcd535655adf:resources/views/college/createcollege.blade.php
                </div>
                <div class="mb-3">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" name = "address" class="form-control" id="address">
                </div>
                <div class="mb-3">
                        <label for="productDesc" class="form-label">Description</label>
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