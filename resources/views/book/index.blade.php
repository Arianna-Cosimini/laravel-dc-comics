@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1 class="display-1 fw-bold text-uppercase text-center mb-5">Laravel Comic</h1>
        <div class="row justify-content-center row-gap-5 mb-5" style="gap:20px">

            @foreach ($books as $book)
                <div class="card" style=" width: calc(100% / 4 - 20px); min-height: 500px">
                    <img src="{{ $book->thumb }}" class="card-img-top" alt="..." style="object-fit:cover; height: 254px;">
                    <div class="card-body  d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->series }}</p>
                        <span>{{$book->price}}</span>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Visualizza</a>
                    </div>
                </div>
            @endforeach


        </div>
        <div id="button" class="d-flex justify-content-center">

            <a href="{{ route('books.create') }}" class="btn btn-primary">Aggiungi un Libro</a>
        </div>
    </div>
@endsection
