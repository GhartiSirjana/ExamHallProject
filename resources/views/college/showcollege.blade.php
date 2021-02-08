@extends('layouts.admin')
@section('content')
<h1 class="h3"> College / Campus </h1>
{{session('msg')}}
<a href="createcollege" class="btn btn-primary"> Add College </a>
<table class="table  table-bordered table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>College Name</th>
        <th>Address</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    @foreach($addcollegearr as $addcollege)
    <tr>
        <td>{{$addcollege->id}}</td>
        <td>{{$addcollege->name}}</td>
        <td>{{$addcollege->address}}</td>
        <td>{{$addcollege->description}}</td>


        <td>
            <a href="college_delete/{{$addcollege->id}}" class="btn btn-primary"> Delete</a>
            <a href="editcollege/{{$addcollege->id}}" class="btn btn-danger"> edit</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection