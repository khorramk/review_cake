<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public $primaryKey = 'id';

    public $attributes = [
        'reviews' => null,
        'user_id' => 1,
        'rating_id' => 1,
    ];
    
    public $timestamps = false;

    public function user()
    {
        
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        
        return $this->hasMany(Comment::class);
    }

    public function rating()
    {
        return $this->hasOne(Rating::class);
    }
}
