<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function borrowBook($id)
    {
        $book = Book::findOrFail($id);
        $user = Auth::user();
        $borrowing = new Borrowing();
        $borrowing->user_id = $user->id;
        $borrowing->book_id = $book->id;
        $borrowing->borrowed_at = now();
        $borrowing->due_at = now()->addDays(7);
        $borrowing->save();
        return redirect()->route('books.show', $book->id);
    }

    public function borrowedBooks()
    {
        $borrowings = Borrowing::where('user_id', Auth::user()->id)->get();
        return view('books.borrowed', compact('borrowings'));
    }

    public function returnBook($id)
    {
        $borrowedBook = Borrowing::findOrFail($id);
        $borrowedBook->is_returned = true;
        $borrowedBook->return_at = now();
        $borrowedBook->save();

        return redirect()->back();
    }
}
