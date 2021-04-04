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
        <form action="{{ route('subjects.update', $subject->id) }}" method="post">
            @csrf
            @method('put')
     
         <div class="form-group">
        <label>Select Semester </label>
            <select class="form-select" name="semester" class="form-control" value="{{$subject->semester}}"  aria-label="Default select example">
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
            <select class="form-select" name="faculty" class="form-control" value="{{$subject->faculty}}" aria-label="Default select example">
                <option selected>Bsc.Csit</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="form-group">
    <label>Select Department </label>
            <select class="form-select" name="department" class="form-control" value="{{$subject->department}}"  aria-label="Default select example">
                <option selected>Bsc.Csit</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="wrap">
        <div class="form-group">
            <label> Subject Name </label>
            <input type="text" name="subjectname" value="{{$subject->subjectname}}" class="form-control">
          
        </div>
        <div class="form-group">
            <label> SubjectCode </label>
            <input type="number" name="code" value="{{$subject->subjectcode}}" class="form-control">
           
        </div>
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