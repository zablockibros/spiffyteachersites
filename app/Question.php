<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Question extends Model implements SluggableInterface
{
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
