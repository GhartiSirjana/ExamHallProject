@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/seatarrangement.css')}}" rel="stylesheet">
    <title>Seat Arrangement For Exam</title>
</head>
<body>
<div class="container">
<h1 class="heading"> Seat Arrangement For Exam : TOC, DBMS </h1>
<h2 class="sub-heading">
<p class="roomno"> Room No.1 </p>
<p class="column"> Row * col : 6 * 6 </p>
<p class="date"> Exam Date </p>
</h2>
<div class="seat_arrangement">
<button type="button" class="btn btn-outline-primary">4001</button>
<button type="button" class="btn btn-outline-primary">4002</button>
<button type="button" class="btn btn-outline-primary">4003</button>
<button type="button" class="btn btn-outline-primary">4004</button>
<button type="button" class="btn btn-outline-primary">4004</button>
</div>

<div class="seat_arrangement">
<button type="button" class="btn btn-outline-primary">4001</button>
<button type="button" class="btn btn-outline-primary">4002</button>
<button type="button" class="btn btn-outline-primary">4003</button>
<button type="button" class="btn btn-outline-primary">4004</button>
<button type="button" class="btn btn-outline-primary">4004</button>
</div>
<div class="seat_arrangement">
<button type="button" class="btn btn-outline-primary">4001</button>
<button type="button" class="btn btn-outline-primary">4002</button>
<button type="button" class="btn btn-outline-primary">4003</button>
<button type="button" class="btn btn-outline-primary">4004</button>
<button type="button" class="btn btn-outline-primary">4004</button>
</div>
<div class="seat_arrangement">
<button type="button" class="btn btn-outline-primary">4001</button>
<button type="button" class="btn btn-outline-primary">4002</button>
<button type="button" class="btn btn-outline-primary">4003</button>
<button type="button" class="btn btn-outline-primary">4004</button>
<button type="button" class="btn btn-outline-primary">4004</button>
</div>
<div class="seat_arrangement">
<button type="button" class="btn btn-outline-primary">4001</button>
<button type="button" class="btn btn-outline-primary">4002</button>
<button type="button" class="btn btn-outline-primary">4003</button>
<button type="button" class="btn btn-outline-primary">4004</button>
<button type="button" class="btn btn-outline-primary">4004</button>
</div>
<div class="seat_arrangement">
<button type="button" class="btn btn-outline-primary">4001</button>
<button type="button" class="btn btn-outline-primary">4002</button>
<button type="button" class="btn btn-outline-primary">4003</button>
<button type="button" class="btn btn-outline-primary">4004</button>
<button type="button" class="btn btn-outline-primary">4004</button>
</div>

</div>

    
</body>
</html>
@endsection