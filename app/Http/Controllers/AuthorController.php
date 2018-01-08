<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Author;
use App\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{

    /**
     * List all authors
     *
     * @return \App\Author[]
     */
    public function index()
    {
        $authors = Author::all();

        $authors->load('books', 'books.editions');

        return $authors;
    }

    /**
     * Get an author
     *
     * @param \App\Author $author
     *
     * @return \App\Author
     */
    public function show(Author $author)
    {
        $author->load('books', 'books.editions');

        return $author;
    }

    /**
     * Create an author
     *
     * @param \App\Http\Request\AuthorRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AuthorRequest $request)
    {
        $author = Author::create($request->all());

        return response()->json($author, 201);
    }

    /**
     * Update an author
     *
     * @param \App\Http\Request\AuthorRequest $request
     * @param \App\Author                     $author
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AuthorRequest $request, Author $author)
    {
        $author->update($request->all());

        return $author;
    }

    /**
     * Delete an author
     *
     * @param \App\Author $author
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return response()->json(null, 204);
    }
}
