<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    
    public $attributes = [
        'review_id' => 1,
        'user_id' => 1,
    ];

    public function review()
    {
        return $this->belongsTo('App\Review');
    }

    public function user()
    {
        
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'comments',
    ];
}
