<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $guarded = [];
    
    public function website()
    {
        return $this->belongsTo('App\Website');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
