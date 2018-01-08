<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'title',
        'book_id',
        'isbn',
    ];

    /**
     * Editions have one book
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
