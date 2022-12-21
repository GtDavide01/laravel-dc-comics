@extends('layouts.app')
@section('title', 'indexComics')

@section('content')
    <div class="container mt-5">
        <h1>Home Comics</h1>
    </div>
    <div class="bghome">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
@endsection
