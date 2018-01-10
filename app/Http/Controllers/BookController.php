<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Http\Requests\BookRequest;
use App\Http\Resources\BookCollection;
use App\Http\Resources\BookResource;

class BookController extends Controller
{

    /**
     * Relationships to be lazy eager loaded
     *
     * @var array
     */
    protected $eager_loaded = [
        'author',
        'editions',
    ];

    /**
     * List all books
     *
     * @return \App\Http\Resources\BookCollection
     */
    public function index()
    {
        $books = Book::paginate();

        $books->load($this->eager_loaded);

        return new BookCollection($books);
    }

    /**
     * Get a book
     *
     * @param \App\Book $book
     *
     * @return \App\Http\Resources\BookResource
     */
    public function show(Book $book)
    {
        $book->load($this->eager_loaded);

        return new BookResource($book);
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

        $book->load($this->eager_loaded);

        return response()->json(
            new BookResource($book),
            201
        );
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

        $book->load($this->eager_loaded);

        return new BookResource($book);
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
