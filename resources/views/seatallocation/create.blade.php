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
                            
                        </div>
                        <div class="col mb-12">
                            <label>Select Rooms </label>
                            <select class="form-select" multiple aria-label="Default select example" name="rooms[]" id="room">
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
                        <div class="exam-input-group">
                            <label for="">Select Exams</label>
                            <div class="form-group col mb-0">
                                        <select name="exams[]" multiple class="form-control">
                                            @foreach($exams as $exam)
                                            <option value="{{ $exam->id }}">{{  $exam->Name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                        </div>
                    
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary"> Save </button>

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