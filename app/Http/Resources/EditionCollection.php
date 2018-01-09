<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EditionCollection extends ResourceCollection
{

    /**
     * Transform the resource collection into an array
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return EditionResource::collection($this->collection);
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
                'self' => route('editions.index'),
            ],
        ];
    }
}
