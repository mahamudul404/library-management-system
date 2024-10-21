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
        // $totalUsers = User::count();

        return view('admin.dashboard');
    }

}
