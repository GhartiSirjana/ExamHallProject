@extends('layouts.admin')
@push('styles')
<link href="{{ asset('css/dashboard.css')}}" rel="stylesheet">
@endpush
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 m-auto background">
            <h1 class="h1 text-center text-white">Welcome To Exam Hall Arrangement System</h1>
             <!-- <img src="{{asset('image/mini.jpg')}}" alt=""> -->
        </div>
    </div>
</div>

@endsection