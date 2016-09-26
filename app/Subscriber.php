<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $guarded = [];
    
    const NEWSLETTER_TYPE = 'newsletter';
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
