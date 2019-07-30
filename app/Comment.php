<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
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
