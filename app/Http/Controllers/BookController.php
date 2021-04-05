<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();
        $books = Book::all();

        return view('books.books.index', [
            'authors' => $authors,
            'books' => $books
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author_id' => 'required|numeric',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'publisher' => 'required|string'
        ]);

        $book = Book::create([
            'title' => $request->title,
            'author_id' => $request->author_id,
            'description' => $request->description,
            'price' => $request->price,
            'publisher' => $request->publisher
        ]);
        if (!$book) {
            return redirect()
                ->route('books.index')
                ->with('error', 'Unknown error occurred.');
        }
        
        return redirect()
            ->route('books.index')
            ->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $authors = Author::all();

        return view('books.books.edit', [
            'authors' => $authors,
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string',
            'author_id' => 'required|numeric',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'publisher' => 'required|string'
        ]);

        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->publisher = $request->publisher;
        $book->save();
        
        return redirect()
            ->route('books.index')
            ->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('success', 'Book deleted successfully.');
    }
}
