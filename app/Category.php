<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the questions
     */
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
