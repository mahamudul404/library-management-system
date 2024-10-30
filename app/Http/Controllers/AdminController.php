<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // $totalBooks = Book::count();
        // $borrowedBooks = Borrowing::whereNull('return_at')->count();
        // $overdueBooks = Borrowing::where('due_at', '<', now())->whereNull('return_at')->count();

        $totalUsers = User::where('role', 'user')->count();

        return view('admin.dashboard', compact('totalUsers'));
    }

    public function users()
    {
        $users = User::where('role', 'user')->get();

        return view('admin.users', compact('users'));
    }



    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }

    public function books()
    {
        $books = Book::all();
        return view('admin.books', compact('books'));
    }

    public function createBook()
    {
        return view('admin.Add');
    }

    public function storeBook(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->cover_image = $request->cover_image;
        $book->isbn = $request->isbn;
        $book->available = $request->available;
        $book->save();
        return redirect()->back();
    }



    public function deleteBook($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->back();
    }
}
