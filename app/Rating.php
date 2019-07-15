<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $primaryKey = 'rating';
    
    protected $attributes = [
        'review_id' => 1,
        'rating'  => 1,
    ];

    public function review()
    {
        # code...
        return $this->belongsTo(Review::class);
    }
}
