<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

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
        $thisMonth = Carbon::now('UTC');
        $thisMonth->subDays(30);

        return Vote::where(['website_id' => $this->id, 'type' => 'vote'])
            ->where('updated_at', '>=', $thisMonth->format('Y-m-d H:i:s'))
            ->count();
    }

    public function getViewCount()
    {
        $thisMonth = Carbon::now('UTC');
        $thisMonth->subDays(30);

        return Vote::where(['website_id' => $this->id, 'type' => 'view'])
            ->where('updated_at', '>=', $thisMonth->format('Y-m-d H:i:s'))
            ->count();
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
        $this->vote_count = $this->getVoteCount();
        $this->view_count = $this->getViewCount();
        return $this->save();
    }
}
