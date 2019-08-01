<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'reviews',
    ];
    public $timestamps = true;
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
