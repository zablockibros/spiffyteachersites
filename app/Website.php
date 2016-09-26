<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Website extends Model implements SluggableInterface
{
    use SoftDeletes;

    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $guarded = [];
    
    protected $fillable = [
        'domain',
        'name',
        'description',
        'pinterest',
        'tpt',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function categories()
    {
        return $this->belongsToMany('App\Category')->withPivot('rank', 'type');
    }
    
    public function votes()
    {
        return $this->hasMany('App\Vote');
    }

    public function getVoteCount()
    {
        return Vote::where(['website_id' => $this->id, 'type' => 'vote'])->count();
    }
    
    public function getVoteCountAttribute()
    {
        return $this->getVoteCount();
    }

    public function getViewCount()
    {
        return Vote::where(['website_id' => $this->id, 'type' => 'view'])->count();
    }

    public function getViewCountAttribute()
    {
        return $this->getViewCount();
    }

    public function getDomainAttribute($value)
    {
        if (strpos($value, 'http') === FALSE) {
            return 'http://'.$value;
        }

        return $value;
    }

    /**
     * Updates the vote counts for this website
     * 
     * @return bool
     */
    public function updateVoteCount()
    {
        $votes = $this->votes;
        
        $this->vote_count = count($votes);
        return $this->save();
    }
}
