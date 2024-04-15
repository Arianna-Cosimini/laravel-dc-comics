<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view("book.index", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("book.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validation($request->all());

        // creiamo una nuova book


        $newBook = new book();
        $newBook->title = $request->title;
        $newBook->description = $request->description;
        $newBook->type = $request->type;
        $newBook->series = $request->series;

        $newBook->save();

        // spostiamo l'utente nella index
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {

        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $this->validation($request->all());
        // codice per modificare il record 
        $book->title = $request->title;
        $book->description = $request->description;
        $book->type = $request->type;
        $book->series = $request->series;

        $book->save();

        return redirect()->route('books.show', $book->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }


    private function validation($data)
    {

        $validator = Validator::make(
            $data,
            [
                'title' => 'required|max:100',
                'description' => 'nullable|max:5000',
                'type' => 'required|max:50',
                'series' => 'required|max:100'
            ],
            [
                'title.required' => 'Il titolo deve essere inserito',
                'title.max' => "Il titolo deve avere massimo :max caratteri",
                'type.max' => "La tipologia deve avere massimo :max caratteri",
                'type.required' => 'La tipologia deve essere inserita',
                'description.max' => "Inserisci una descrizione di massimo :max caratteri",
                'series.required' => "Il tipo di serie deve essere inserito",
                'series.max' => "Inserisci il tipo di serie di massimo :max caratteri",
            ]
        )->validate();
    }
}
