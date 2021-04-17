@extends('layouts.admin')
@section('content')
    <div class="col-md-6 offset-md-3">
        <div class="card">

        <div class="card-header">Add Exam</div>
        <div class="card-body">
            <form method="post" action ="{{ route('exam.update', $exammanagement->id) }}">
            @csrf
            @method('put')
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="Name" class="form-control" id="examname" value="{{$exammanagement->Name}}" >
                    @error('Name')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                            <label>Department</label>
                            <select class="form-select" name="department_id" value="{{$exammanagement->department}}" id="" class="form-control form-control-sm">
                                @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->department_name}}</option>
                                @endforeach
                            </select>
                            @error('department_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>
                <div class="mb-3">
                <select class="form-select" name="faculty_id" value="{{$exammanagement->faculty}}" class="form-control form-control-sm" id="faculty">
                                @foreach($faculties as $faculty)
                                <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                @endforeach
                            </select>
                    @error('faculty_id')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                        <label>Subject</label>
                        <select class="form-select" name="subject_id" value="{{$exammanagement->subject}}" class="form-control form-control-sm" id="faculty">
                                @foreach($subjects as $subject)
                                <option value="{{$subject->id}}">{{$subject->subjectname}}</option>
                                @endforeach
                            </select>
                        @error('subject_id')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                        <label>Semester</label>
                        <input type="text" name="semester" class="form-control" id="semester" value="{{$exammanagement->semester}}">
                        @error('semester')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                        <label>Exam date</label>
                        <input type="date" name="Exam_Date" class="form-control" id="examdate" value="{{$exammanagement->Exam_Date}}">
                        @error('Exam_Date')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                        <label>Start Time</label>
                        <input type="time" name="Start_Time" class="form-control" id="starttime"value="{{$exammanagement->Start_Time}}" >
                        @error('Start_Time')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                        <label>End Time</label>
                        <input type="time" name="End_Time" class="form-control" id="endtime" value="{{$exammanagement->End_Time}}">
                        @error('End_Time')
                    <span class = "text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Exam</button>
             

            </form>
        </div>
                    
        </div>
    </div>
</div>
@endsection