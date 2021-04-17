@extends('layouts.admin')
@push('styles')
<link href="{{ asset('css/subject.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div>
        <span class="text-danger">{{$error}}</span>
    </div>
    @endforeach
    @endif
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
                            <!-- @error('name')
                            <div>
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror -->
                        </div>
                        <div class="col mb-12">
                            <label>Select Rooms </label>
                            <select class="form-select" aria-label="Default select example" name="room_id" id="room">
                                @foreach($rooms as $room)
                                <option value="{{$room->id}}" class="m-0">{{$room->roomno}}</option>
                                @endforeach
                            </select>

                            @error('room_id')
                            <div>
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="exam-input-group" x-data="{seatallocations:[{exam:''}]}">
                            <template x-for="(item, index) in seatallocations" :key="index">
                                <div class="form-row mb-3 align-items-end">
                                    <div class="form-group col mb-0">
                                        <label for="">Select Exams</label>
                                        <input type="text" name="exam[]" class="form-control">
                                    </div>
                                    <template x-if="index>0">
                                        <button type="button" @click="seatallocations.splice(index, 1)" class="btn btn-danger btn-add-seatallocation"><i class="fa fa-minus"></i></button>
                                    </template>
                                    <template x-if="index==0">
                                        <button type="button" @click="seatallocations.push({exam:''})" class="btn btn-primary btn-add-exam"><i class="fa fa-plus"></i></button>
                                    </template>
                                </div>
                            </template>
                        </div>
                        <!-- <div class="col-md-11">
                            <label>Select Exams </label>
                            <select class="form-select" name="exam_id" class="form-control" aria-label="Default select example">
<<<<<<< HEAD
                                @foreach($exams as $exam)
                                <option value="{{$exam->id}}">{{$exam->Name}}</option>
                                @endforeach
=======

                                @foreach($exams as $exam)
                                <option value="{{$exam->id}}">{{$exam->Name}}</option>
                                @endforeach


                                @foreach($exams as $exam)
                                <option value="{{$exam->id}}">{{$exam->Name}}</option>
                                @endforeach

                                <option value=""></option>

                                <option value=""></option>

>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
                            </select>
                            @error('exam_id')
                            <div>
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div> -->
                        <!-- <div class="col-md-1 mt-5">
                            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </div> -->
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary"> Save </button>
<<<<<<< HEAD
=======
                           

>>>>>>> 958ecf3acdf1771f3a0230c6bf92f80ee035651b
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    document.querySelector('#room').addEventListener('change', (event) => {
        const room = event.target.value;
        window.axois.get(`${room}`).then(result => {
            let options = '';
            result.data.map(room => {
                options += `<option value = "${room.id}">${room.roomno}</option>`;
            });
            document.querySelector('#room').innerHTML = options;
        }).catch(err => {
            console.log(err);
        })
    });
</script>
@endsection