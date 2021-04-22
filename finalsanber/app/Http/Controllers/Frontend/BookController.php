<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('created_at', 'DESC')->limit(1)->get();
        return view('frontend.templates.master', [
            'books' => $books,
        ]);
    }

    public function show(Book $book)
    {
        return view('frontend.book.show', [
            'book' => $book
        ]);
    }

    public function borrow(Book $book)
    {
        $user = auth()->user();

        if($user->borrow()->isStillBorrow($book->id)) {
            return redirect()->back()->with('danger', 'Kamu sudah memimnjam buku dengan judul ini!');
        }

        $user->borrow()->attach($book);
        $book->decrement('quantity');

        return redirect()->back()->with('success', 'Berhasil meminjam buku');
    }
}
