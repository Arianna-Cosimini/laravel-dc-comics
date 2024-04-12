<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

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
        return view('book.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        
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
    public function destroy(string $id)
    {
        //
    }
}
