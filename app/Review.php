<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $primaryKey = 'id';

    protected $attributes = [
        'reviews' => null,
        'user_id' => 1,
    ];
    
    public $timestamps = false;

    public function user()
    {
        
        return $this->belongsTo('App\User');
    }
}
