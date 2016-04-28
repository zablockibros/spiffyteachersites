<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * Get the category.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
