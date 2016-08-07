<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryWebsite extends Model
{
    public $table = 'category_website';
    
    public function websites()
    {
        return $this->belongsTo('App\Website');
    }

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
}
