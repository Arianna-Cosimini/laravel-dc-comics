<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = config("books");

        foreach ($books as $book) {

            $newBook = new Book();

            $newBook->title = $book["title"];
            $newBook->description = $book["description"];
            $newBook->thumb = $book["thumb"];
            
            
            $newBook->price = $book["price"];
            $newBook->series = $book["series"];
            $newBook->sale_date = $book["sale_date"];
            $newBook->type = $book["type"];
            $newBook->artists = implode(' , ', $book['artists']);
            $newBook->writers = implode(' , ', $book['writers']);

            $newBook->save();
        }
    }
}
