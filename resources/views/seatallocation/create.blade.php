@extends('layouts.admin')
@push('styles')
<link href="{{ asset('css/subject.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row mb-3">
                <div class="col-md-10">
                    <h4>Add New Seat</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('seatallocations.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Seat Add</div>
                <div class="card-body">

                    <form action="{{ route('seatallocations.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label> Name </label>
                            <input type="text" name="name" class="form-control" required>
                            @error('name')
                            <div class="alert alert-danger">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Select Exams </label>
                            <select class="form-select" name="exam_id" class="form-control" aria-label="Default select example">
                                @foreach($exams as $exam)
                                <option value="{{$exam->id}}">{{$exam->Name}}</option>
                                @endforeach
                            </select>

                            @error('exam_id')
                            <div class="alert alert-danger">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="wrap">
                            <div class="form-group  col mb-0">
                                <label>Select Rooms </label>
                                <select class="form-select" name="room_id" class="form-control" aria-label="Default select example">
                                 
                                </select>

                                @error('room_id')
                                <div class="alert alert-danger">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <br/> <br/>
                        <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>


                        <button type="submit" class="btn btn-primary"> Save </button>
                        <button type="submit" class="btn btn-alert">Close </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection