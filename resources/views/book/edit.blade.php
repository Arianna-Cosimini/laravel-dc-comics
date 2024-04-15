@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Modifica il contenuto del libro</h1>


        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="4">{{ $book->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $book->type }}">
            </div>

            <div class="mb-3">
                <label for="src" class="form-label">Tipo di serie</label>
                <input type="text" class="form-control" id="src" name="src" value="{{ $book->series }}">
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>

        </form>
    </div>
@endsection
