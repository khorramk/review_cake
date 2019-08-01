<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $filable = [
        'reviews_id',
    ];
    public $timestampes = true;
    public function review()
    {
        return $this->belongsTo('App\Review');
    }
}
