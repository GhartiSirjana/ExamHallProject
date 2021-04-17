@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-10 offset-md-1">
        <h3 class="fs-5"> Subjects</h3>


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
=======
>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
        {{session('msg')}}
        <br />
        <a class="btn btn-info btn-sm" href="{{route('subjects.create')}}" class="btn btn-primary"> ADD subject </a>
        <br /><br />
        <table class="table mt-3 table-bordered">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>SubjectName</th>
                    <th>SubjectCode</th>
                    <th>Semester</th>
                    <th>Faculty</th>
                    <th>Department</th>
<<<<<<< HEAD
<<<<<<< HEAD
                    <th>Created_at</th>
=======
>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
=======
>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
                    <th colspan="2">Action</th>
                </thead>
            </tr>

            @foreach($subjects as $subject)
            <tr>
                <tbody>
                    <td> {{$subject->id}} </td>
                    <td> {{$subject->subjectname}} </td>
                    <td> {{$subject->subjectcode}} </td>
                    <td> {{$subject->semester}} </td>
                    <td> {{$subject->faculty->name}} </td>
                    <td> {{$subject->department->department_name}} </td>
<<<<<<< HEAD
<<<<<<< HEAD
                    <td> {{$subject->created_at}} </td>
                    <td>
                        <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-primary btn-sm"> edit</a>
                    </td>
                    <!-- <a href="{{ route('subjects.destroy', $subject->id) }}" class="btn btn-danger btn-sm"> Delete</a> -->
                    <td>
=======
{{session('msg')}}
<br/>
<a class="btn btn-info btn-sm" href="{{route('subjects.create')}}" class="btn btn-primary"> ADD subject </a> 
<br/><br/>
<table class="table mt-3 table-bordered">
<tr>
<thead>
    <th>ID</th>
    <th>SubjectName</th>
    <th>SubjectCode</th>
    <th>Semester</th>
    <th>Faculty</th>
    <th>Department</th>
    <th colspan="2">Action</th>
</thead>
</tr>

@foreach($subjects as $subject)
<tr>
<tbody>
<td> {{$subject->id}} </td>
<td> {{$subject->subjectname}} </td>
<td> {{$subject->subjectcode}} </td>
<td> {{$subject->semester}} </td>
<td> {{$subject->faculty->name}} </td>
<td> {{$subject->department->department_name}} </td>
<td>
<a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-primary btn-sm"> edit</a>
</td>
<a href="{{ route('subjects.destroy', $subject->id) }}" class="btn btn-danger btn-sm"> Delete</a>
<td>
>>>>>>> 4607777bcc7a4429a51fe800fe9acaf224e24083
=======
=======
>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
                    <td>
                        <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-primary btn-sm"> edit</a>
                    </td>

                    <td>
<<<<<<< HEAD
>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
=======
>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
                        <form action="{{route('subjects.destroy', $subject['id'])}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="Delete">
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </td>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
=======
>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
                </tbody>
            </tr>
            @endforeach
        </table>
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
</tbody>
</tr>
@endforeach
</table>
</div>
>>>>>>> 4607777bcc7a4429a51fe800fe9acaf224e24083
=======
>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
=======
>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
</div>


@endsection