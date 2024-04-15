@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <img src="{{ $book->thumb }}" alt="">
        <h1>{{ $book->title }}</h1>


        <p>
            {{ $book->description }}
        </p>

        <img src="{{ $book->src }}" alt="">

        <div class="py-5">
            <a href="{{ route('books.edit', $book->id) }}"class="btn btn-danger">Modifica</a>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>

        </div>
    </div>



     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il libro</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              Sei sicuro che vuoi eliminare il libro? "{{$book->title}}"
            </div>


            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route('books.destroy', $book->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    
                    {{-- stessa cosa --}}
                    {{-- <input type="submit" class="btn btn-danger" value="Elimina"> --}}
                    <button class="btn btn-danger">Elimina</button>
                </form>

            </div>

          </div>
        </div>
    </div>
@endsection
