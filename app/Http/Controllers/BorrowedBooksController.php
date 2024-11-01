<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BorrowedBooksController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function borrow($id)
    {
        $book = Book::findOrFail($id);
       
        if($book->available){
            $book->available = false;
            $book->save();
            return redirect()->back()->with('success', 'Book borrowed successfully.');
        }else{
            return redirect()->back()->with('error', 'Book is not available.');
        }
    }
}
