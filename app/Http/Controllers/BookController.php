<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; // Include the Book model

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); // Retrieve all books
        return view('books.index', ['books' => $books]); // Pass the books to the view
    }
}