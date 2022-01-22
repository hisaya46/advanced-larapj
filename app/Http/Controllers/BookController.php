<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $items = Book::with('author')->get();
        return view('book.index', ['items' => $items]);
    }
    public function add(Request $request)
    {
        return view('book.add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Book::$rules);
        $form = $request->all();
        Book::create($form);
        return redirect('/book');
    }
}
