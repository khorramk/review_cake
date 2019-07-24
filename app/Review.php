<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $primaryKey = 'id';

    public $attributes = [
        'reviews' => null,
        'user_id' => 1,
    ];
    
   
    public $timestamps = false;

    public function user()
    {
        
        return $this->belongsTo('App\User');
    }
    public function comments()
    {
        
        return $this->hasMany('App\Comment');
    }
}
