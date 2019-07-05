<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $attribute = [
        'user_id' => null
    ];

    public function user()
    {
        # code...
        return $this->belongsTo('App\User');
    }
}
