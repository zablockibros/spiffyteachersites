<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentTaggable\Taggable;

class Question extends Model implements SluggableInterface
{
    use SoftDeletes, Taggable;

    const DIFFICULTIES = [
        'easy' => 'Easy',
        'medium' => 'Medium',
        'hard' => 'Hard',
        'very-hard' => 'Very Hard'
    ];
    
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $fillable = ['category_id', 'name', 'question', 'answer'];

    /**
     * Get the category.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
