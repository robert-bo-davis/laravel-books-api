<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Edition;
use App\Http\Requests\EditionRequest;

class EditionController extends Controller
{

    /**
     * Lists all editions
     *
     * @return \App\Edition[]
     */
    public function index()
    {
        $editions = Edition::all();

        $editions->load('book', 'book.author', 'book.editions');

        return $editions;
    }

    /**
     * Get an edition
     *
     * @param \App\Edition $edition
     *
     * @return \App\Edition
     */
    public function show(Edition $edition)
    {
        $edition->loadMissing('book', 'book.author', 'book.editions');

        return $edition;
    }

    /**
     * Create an edition
     *
     * @param \App\Http\Request\EditionRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(EditionRequest $request)
    {
        $edition = Edition::create($request->all());

        $edition->load('book', 'book.author', 'book.editions');

        return response()->json($edition, 201);
    }

    /**
     * Update an edition
     *
     * @param \App\Http\Request\EditionRequest $request
     * @param \App\Edition                     $edition
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(EditionRequest $request, Edition $edition)
    {
        $edition->update($request->all());

        $edition->load('book', 'book.author', 'book.editions');

        return $edition;
    }

    /**
     * Delete an edition
     *
     * @param \App\Edition $edition
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Edition $edition)
    {
        $edition->delete();

        return response()->json(null, 204);
    }
}
