@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>{{ $book->title }}</h1>

        <p>
            {{ $book->description }}
        </p>

        <img src="{{ $book->src }}" alt="">
    </div>
@endsection
