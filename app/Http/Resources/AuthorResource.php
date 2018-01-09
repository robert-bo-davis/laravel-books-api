<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class AuthorResource extends Resource
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
            'type'        => 'author',
            'id'          => $this->id,
            'first_name'  => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name'   => $this->last_name,
            'birth_year'  => $this->birth_year,
            'death_year'  => $this->death_year,
            'books'       => new BookCollection($this->whenLoaded('books')),
            'links'       => [
                'self' => route('authors.show', ['author' => $this->id]),
            ]
        ];
    }
}
