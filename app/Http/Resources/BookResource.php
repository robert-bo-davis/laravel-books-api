<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class BookResource extends Resource
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
            'type'     => 'book',
            'id'       => $this->id,
            'title'    => $this->title,
            'subtitle' => $this->subtitle,
            'editions' => new EditionCollection($this->whenLoaded('editions')),
            'author'   => new AuthorResource($this->whenLoaded('author')),
            'links'    => [
                'self' => route('books.show', ['book' => $this->id]),
            ]
        ];
    }
}
