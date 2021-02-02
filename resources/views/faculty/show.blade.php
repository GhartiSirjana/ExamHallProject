@extends('layouts.admin')


@push('styles')
    <link href="{{ asset('css/faculty.css') }}">
@endpush

@section('content')




@endsection
@push('scripts')
    <script>
        $().dataTable();

    </script>
@endpush
