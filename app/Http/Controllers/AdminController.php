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
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required',
            'year' => 'required|integer',
            'isbn' => 'required',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->year = $request->year;

        // store image
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            $image->move(public_path('images'), $filename);
            $book->cover_image = $filename;
        }


        $book->save();
        return redirect()->route('admin.books');
    }



    public function deleteBook($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->back();
    }
}
