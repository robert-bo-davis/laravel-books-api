<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class EditionResource extends Resource
{

    /**
     * Transform the resource into an array
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type'   => 'edition',
            'id'     => $this->id,
            'number' => $this->number,
            'title'  => $this->title,
            'isbn'   => $this->isbn,
            'book'   => new BookResource($this->whenLoaded('book')),
            'links'  => [
                'self' => route('editions.show', ['edition' => $this->id]),
            ]
        ];
    }
}
