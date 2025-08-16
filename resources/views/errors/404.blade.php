@extends('layouts.main')

@section('title', 'Page Not Found')

@section('content')
    <div class="text-center mt-5">
        <h1>404</h1>
        <p>Oops! The page you are looking for could not be found.</p>
        <a href="{{ url('/') }}">Go to Homepage</a>
    </div>
@endsection
