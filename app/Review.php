<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public $primaryKey = 'id';

    public $attributes = [
        'user_id' => 1,
        
    ];
    
   
    public $timestamps = true;

    public function user()
    {
        
        return $this->belongsTo('App\User');
    }
    public function comments()
    {
        
        return $this->hasMany('App\Comment');
    }
}
