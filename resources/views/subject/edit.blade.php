@extends('layouts.admin')

@section('content')

div class="container">
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="row mb-3">
            <div class="col-md-10">
                <h4>Update Subjects</h4>
            </div>
            <div class="col-md-2">
                <a href="{{ route('subjects.index') }}" class="btn btn-success btn-sm">Back</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Upadate subjects</div>
            <div class="card-body">
                <form action="{{route('subjects.update', $subject->id)}}" class="" method="post">
                    @csrf
                    @method('put')
                    <div class="wrap">
                        <div class="form-group">
                            <label> Subject Name </label>
                            <input type="text" name="subjectname" value="{{$subject->subjectname}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label> SubjectCode </label>
                            <input type="text" name="subjectcode" value="{{$subject->subjectcode}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Select Semester </label>
                        <input type="number" name="semester" value="{{$subject->semester}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Select Faculty </label>
                        <select class="form-select" name="faculty_id" class="form-control" value="{{$subject->faculty}}" aria-label="Default select example">
                            @foreach($faculties as $faculty)
                            <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Select Department </label>
                        <select class="form-select" name="department_id" class="form-control" value="{{$subject->department}}" aria-label="Default select example">
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->department_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary"> Add Subject</button>
                </form>
            </div>
        </div>
    </div>
</div>


</body>

</html>
@endsection