<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{

    /**
     * List all books
     *
     * @return \App\Book[]
     */
    public function index()
    {
        $books = Book::all();

        $books->load('author', 'editions');

        return $books;
    }

    /**
     * Get a book
     *
     * @param \App\Book $book
     *
     * @return \App\Book
     */
    public function show(Book $book)
    {
        $book->loadMissing('author', 'editions');

        return $book;
    }

    /**
     * Create a book
     *
     * @param \App\Http\Request\BookRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(BookRequest $request)
    {
        $book = Book::create($request->all());

        $book->load('author', 'editions');

        return response()->json($book, 201);
    }

    /**
     * Update a book
     *
     * @param \App\Http\Request\BookRequest $request
     * @param \App\Book                     $book
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(BookRequest $request, Book $book)
    {
        $book->update($request->all());

        $book->load('author', 'editions');

        return $book;
    }

    /**
     * Delete a book
     *
     * @param \App\Book $book
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json(null, 204);
    }
}
