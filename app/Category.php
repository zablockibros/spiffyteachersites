<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model implements SluggableInterface
{
    use SoftDeletes;
    
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $fillable = ['name', 'description'];

    /**
     * Get the questions
     */
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
