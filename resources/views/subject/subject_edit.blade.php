@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <title>Subject Create</title>
</head>
<style>
    .form-wrapper{
        margin-top:5%;
        margin-left:5%;
        
    }
    .form-select{
        width:80%;
    }
    .wrap{
        display:flex;
        
    }
</style>
<body>
    <div class="container">
        <br/> <br/>
        <h1> <b> ADD New Subject </b></h1>
        <div class="form-wrapper">
        <form action="{{route('subject.subject_edit', [$subjectarr->id])}}" method="post">
            @csrf
     
        
      
      
     
        <div class="form-group">
        <label>Select Semester </label>
            <select class="form-select" name="semester" class="form-control" value="{{$subjectarr->Semester}}"  aria-label="Default select example">
                <option selected>1sem</option>
                <option value="1">2nd sem</option>
                <option value="2">3rdsem</option>
                <option value="3">4thsem</option>
                <option value="3">5thsem</option>
                <option value="3">6thsem</option>
                <option value="3">7thsem</option>
                <option value="3">8thsem</option>
            </select>
        </div>
        <div class="form-group">
        <label>Select Faculty </label>
            <select class="form-select" name="faculty" class="form-control" value="{{$subjectarr->Faculty}}" aria-label="Default select example">
                <option selected>Bsc.Csit</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="form-group">
    <label>Select Department </label>
            <select class="form-select" name="department" class="form-control"  aria-label="Default select example">
                <option selected>Bsc.Csit</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="wrap">
        <div class="form-group">
            <label> Subject Name </label>
            <input type="text" name="subjectname" value="{{$subjectarr->SubjectName}}" class="form-control">
          
        </div>
        <div class="form-group">
            <label> SubjectCode </label>
            <input type="number" name="code" value="{{$subjectarr->SubjectCode}}" class="form-control">
           
        </div>
        </div>
        <button type="submit" class="btn btn-primary"> Add Subject</button>
    </form>
    </div>
    </div>
    
</body>
</html>
@endsection