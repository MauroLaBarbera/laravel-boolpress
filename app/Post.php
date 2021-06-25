<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'slug',
        'content',
        'category_id',
    ];

    /**
     * Relazione con categories
     */
    //posts - categories
    public function category() {
        return $this->belongsTo('App\Category');
    }

    /**
     * Relazione con tags
     */
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
