<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public $attributes = [
        'review_id' => null,
    ];

    public function review()
    {
        return $this->belongsTo('App\Review');
    }

    public function user()
    {
        
        return $this->belongsTo('App\User');
    }
}
