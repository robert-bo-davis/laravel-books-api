<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Author;
use App\Http\Requests\AuthorRequest;
use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;

class AuthorController extends Controller
{

    /**
     * Relationships to be lazy eager loaded
     *
     * @var array
     */
    protected $eager_loaded = [
        'books',
        'books.editions',
    ];

    /**
     * List all authors
     *
     * @return \App\Author[]
     */
    public function index()
    {
        $authors = Author::paginate();

        $authors->load($this->eager_loaded);

        return new AuthorCollection($authors);
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
        $author->load($this->eager_loaded);

        return new AuthorResource($author);
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

        $author->load($this->eager_loaded);

        return response()->json(
            new AuthorResource($author),
            201
        );
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

        $author->load($this->eager_loaded);

        return new AuthorResource($author);
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
