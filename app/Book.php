<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'subtitle',
        'author_id',
    ];

    /**
     * Books have one author
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    /**
     * Books have many editions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function editions()
    {
        return $this->hasMany('App\Edition');
    }
}
