@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $book->thumb }}" class="card-img-top" alt="{{ $book->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->description }}</p>
                        <a href="#" class="btn btn-primary">Visualizza</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
