<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $primaryKey = 'id';
    
    public $attributes = [
       
        'rating' => 1,
    ];

    public function review()
    {
        # code...
        return $this->belongsTo(Review::class);
    }
}
