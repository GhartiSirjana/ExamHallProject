@extends('layouts.admin')
@push('styles')    
    <link href="{{ asset('css/subject.css')}}" rel="stylesheet">
@endpush
@section('content')

    <div class="container">
        <br/> <br/>
        <h1> <b> ADD New Subject </b></h1>
        <div class="form-wrapper">
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
    
</body>
</html>
@endsection