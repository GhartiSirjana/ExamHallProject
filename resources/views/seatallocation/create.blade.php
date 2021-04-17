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

                    <form action="{{ route('seatallocations.store') }}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                            <label> Name </label>
                            <input type="text" name="name" class="form-control form-control-sm">
                            @error('name')
                            <div>
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>

                        <div class="col mb-12">
                            <label>Select Rooms </label>
                            <select class="form-select" name="room_id" class="form-control" aria-label="Default select example">
                            </select>
                            @error('room_id')
                            <div>
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-11">
                            <label>Select Exams </label>
                            <select class="form-select" name="exam_id" class="form-control" aria-label="Default select example">

                                @foreach($exams as $exam)
                                <option value="{{$exam->id}}">{{$exam->Name}}</option>
                                @endforeach


                                @foreach($exams as $exam)
                                <option value="{{$exam->id}}">{{$exam->Name}}</option>
                                @endforeach

                                <option value=""></option>

                                <option value=""></option>

                            </select>
                            @error('exam_id')
                            <div>
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-1 mt-5">
                            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </div>
                        <div class="col-md-3 ml-auto mt-4">
                            <button type="submit" class="btn btn-primary"> Save </button>
                           

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection