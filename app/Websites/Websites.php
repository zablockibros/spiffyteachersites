<?php

namespace App\Websites;

use App\Category;
use App\Website;
use App\CategoryWebsite;
use Carbon\Carbon;

class Websites
{
    public function calculateRanksForCategory(Category $category = null)
    {
        $thisMonth = Carbon::now('UTC');
        $thisMonth->subDays(30);

        if ($category) {
            $websites = Website::whereHas('categories', function ($query) use ($category) {
                    $query->where('id', '=', $category->id);
                })
                ->with(['categories' => function ($query) use ($category) {
                    $query->where('id', '=', $category->id);
                }])
                ->withCount(['votes' => function ($query) use ($thisMonth) {
                    $query->where('updated_at', '>=', $thisMonth->format('Y-m-d H:i:s'));
                }])
                ->orderBy('votes_count', 'desc')
                ->get();

            $rank = 0;
            $score = -1;

            foreach ($websites as $website) {
                if ($website->votes_count > $score) {
                    $score = $website->votes_count;
                    $rank++;
                }
                $website->categories[0]->pivot->rank = $rank;
                $website->categories[0]->pivot->save();
            }
        } else {
            $websites = Website::where('deleted_at', null)
                ->withCount(['votes' => function ($query) use ($thisMonth) {
                    $query->where('updated_at', '>=', $thisMonth->format('Y-m-d H:i:s'));
                }])
                ->orderBy('votes_count', 'desc')
                ->get();

            $rank = 0;
            $score = -1;

            foreach ($websites as $website) {
                if ($website->votes_count > $score) {
                    $score = $website->votes_count;
                    $rank++;
                }
                $website->rank = $rank;
                $website->save();
            }
        }
    }
}