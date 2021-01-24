<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href ="{{ asset('css/app.css')}}" rel="stylesheet">
    <title>Faculty Show</title>
</head>
<body>
<h1> FACULTY </h1>
{{session('msg')}}
<a href="faculty_create" class="btn btn-primary"> ADD Faculty </a> 
<table class="table  table-bordered table-striped table-hover">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Short Name</th>
    <th>Department</th>
    <th>Created_at</th>
    <th>Action</th>
</tr>
@foreach($facultyarr as $faculty)
<tr>
<td> {{$faculty->id}} </td>
<td> {{$faculty->Name}} </td>
<td> {{$faculty->Short_Name}} </td>
<td> {{$faculty->Department}} </td>
<td> {{$faculty->created_at}} </td>
<td>
<a href="faculty_delete/{{$faculty->id}}" class="btn btn-primary"> Delete</a>
<a href="faculty_edit/{{$faculty->id}}" class="btn btn-danger"> edit</a>
</td>
</tr>
@endforeach
</table>
    
</body>
</html>