<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Edition;
use App\Http\Requests\EditionRequest;
use App\Http\Resources\EditionCollection;
use App\Http\Resources\EditionResource;

class EditionController extends Controller
{

    /**
     * Relationships to be lazy eager loaded
     *
     * @var array
     */
    protected $eager_loaded = [
        'book',
        'book.author',
        'book.editions',
    ];

    /**
     * Lists all editions
     *
     * @return \App\Http\Resources\EditionCollection
     */
    public function index()
    {
        $editions = Edition::paginate();

        $editions->load($this->eager_loaded);

        return new EditionCollection($editions);
    }

    /**
     * Get an edition
     *
     * @param \App\Edition $edition
     *
     * @return \App\Http\Resources\EditionResource
     */
    public function show(Edition $edition)
    {
        $edition->load($this->eager_loaded);

        return new EditionResource($edition);
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

        $edition->load($this->eager_loaded);

        return response()->json(
            new EditionResource($edition),
            201
        );
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

        $edition->load($this->eager_loaded);

        return new EditionResource($edition);
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
