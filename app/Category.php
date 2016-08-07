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

    protected $fillable = ['name', 'description', 'parent_id'];
    
    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function websites()
    {
        return $this->belongsToMany('App\Website')->withPivot('rank', 'type');
    }
}
