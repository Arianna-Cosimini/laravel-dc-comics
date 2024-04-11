@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($books as $book)
            <div class="card" style="width: 18rem;">
                <img src="{{ $book->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">{{ $book->series }}</p>
                    <a href="{{route('books.show', $book->id)}}" class="btn btn-primary">Visualizza</a>
                </div>
            </div>
        @endforeach


        <a href="{{ route('books.create') }}" class="btn btn-primary">Aggiungi una pasta</a>
    </div>
@endsection
