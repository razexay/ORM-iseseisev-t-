<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;


class BookController extends Controller
{
    public function index()
    {
        $order = request('order') || 'asc';
        $books = Book::query();
        if (request()->has('sort')) {
            $books->orderBy(request()->query('sort'), $order);
        }

        return view('welcome', ['books' => $books->paginate(20), 'order' => $order]);
    }
    public function show($book)
    {
        $book = Book::with('author')->find($book);
        return view('show', compact('book'));
    }
}
