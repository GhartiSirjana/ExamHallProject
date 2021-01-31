@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
.form-group input{
    width:50%;
}
.form-group .form-select{
    width:50%;
}
.container a{
    color:blue;
}
</style>
<body>
<div class="container">
    <br/>  
    <br/>  
<a href="faculty_show"> Back </a>
    <form action="{{route('faculty.faculty_edit', [$facultyarr->id])}}" method="post">
    @csrf
    <div class="form-group">
    <label> Name </label>
    <input type="text" name="name"  class="form-control" value="{{$facultyarr->Name}}" required > 
    @error('name')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
    </div>
    <div class="form-group">
    <label> Short Name </label>
    <input type="text" name="short_name"  class="form-control" value="{{$facultyarr->Short_Name}}" required > 
    @error('short_name')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
    </div>
    <div class="form-group">
    <label> Department</label>
    <input type="text" name="department"  class="form-control" value="{{$facultyarr->Department}}" required > 
    @error('department')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
    </div>
    <br/>
   <button type="submit" class="btn btn-primary"> submit </button>
    </form>
    </div>
</body>
</html>
@endsection