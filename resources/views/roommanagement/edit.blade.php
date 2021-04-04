@extends('layouts.admin')
@section('content')
    <div class="col-md-6 offset-md-3">
        <div class="card">

        <div class="card-header">Add Room</div>
        <div class="card-body">
            <form method="POST" action="">
            @csrf
            <div class="mb-3">
                        <label for="room" class="form-label">Room No</label>
                        <input type="text" name="room" class="form-control" id="room" >
                </div>
                <div class="mb-3">
                    <label for="block" class="form-label">Block</label>
                    <input type="text"name="block" class="form-control" id="block">
                </div>
                <div class="mb-3">
                    <label for="Floor" class="form-label">floor</label>
                    <input type="text" name = "floor" class="form-control" id="floor">
                </div>
                
                <div class="mb-3">
                        <label for="roomcapacity" class="form-label">Room capacity</label>
                        <input type="number" name="roomcapacity" class="form-control" id="roomcapacity" >
                </div>
                <div class="mb-3">
                        <label for="rows" class="form-label">No of rows</label>
                        <input type="number" name="rows" class="form-control" id="rows" >
                </div>

                <div class="mb-3">
                        <label for="column" class="form-label">No of column</label>
                        <input type="number" name="column" class="form-control" id="column" >
                </div>
                <div class="mb-3">
                        <label for="invigilator" class="form-label">Invigilator</label>
                        <input type="text" name="invigilator" class="form-control" id="invigilator" >
                </div>


                <button type="submit" class="btn btn-primary">Add room</button>
                <button type="submit" class="btn">Close</button>

            </form>
        </div>
                    
        </div>
    </div>
</div>
@endsection