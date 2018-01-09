<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AuthorCollection extends ResourceCollection
{

    /**
     * Transform the resource collection into an array
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return AuthorResource::collection($this->collection);
    }

    /**
     * Add additional elements to the collection
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request)
    {
        return [
            'links'    => [
                'self' => route('authors.index'),
            ],
        ];
    }
}
