<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = true;
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
