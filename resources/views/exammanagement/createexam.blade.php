@extends('layouts.admin')
@section('content')
    <div class="col-md-6 offset-md-3">
        <div class="card">

        <div class="card-header">Add Exam</div>
        <div class="card-body">
            <form method="post" action ="exam_submit">
            @csrf
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="examname" class="form-control" id="examname">
                    @error('examname')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Faculty</label>
                    <input type="text" name = "faculty" class="form-control" id="faculty">
                </div>
                <div class="mb-3">
                        <label>Semester</label>
                        <input type="text" name="semester" class="form-control" id="semester" >
                </div>
                <div class="mb-3">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" id="subject" >
                </div>
                <div class="mb-3">
                        <label>Exam date</label>
                        <input type="date" name="examdate" class="form-control" id="examdate" >
                </div>
                <div class="mb-3">
                        <label>Start Time</label>
                        <input type="time" name="starttime" class="form-control" id="starttime" >
                </div>
                <div class="mb-3">
                        <label>End Time</label>
                        <input type="time" name="endtime" class="form-control" id="endtime" >
                </div>
                <button type="submit" class="btn btn-primary">Add Exam</button>
                <button type="submit" class="btn">Close</button>

            </form>
        </div>
                    
        </div>
    </div>
</div>
@endsection