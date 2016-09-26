<?php

namespace App\Http\Controllers;

use App\Vote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Website;
use App\Category;
use Validator;
use Websites;

class WebsitesController extends Controller
{
    /**
     * View a website
     *
     * @param Request $request
     * @param $slug
     * @return mixed
     */
    public function view(Request $request, $slug)
    {
        $website = Website::where('slug', $slug)->firstOrFail();

        if (!empty($request->user()->id)) {
            if ($website->user_id == $request->user()->id) {
                //return redirect(route('sites.userView', ['id' => $website->id]));
            }
        }

        $thisMonth = Carbon::now('UTC');
        $thisMonth->subDays(30);
        
        if ($request->user()) {
            $vote = Vote::where([
                'website_id' => $website->id,
                'user_id' => $request->user()->id,
            ])
                ->where('updated_at', '>=', $thisMonth->format('Y-m-d H:i:s'))
                ->first();
        } else {
            $vote = Vote::where([
                'website_id' => $website->id,
                'session_id' => $request->session()->getId(),
            ])
                ->where('updated_at', '>=', $thisMonth->format('Y-m-d H:i:s'))
                ->first();
        }

        return view('websites.view', [
            'website' => $website,
            'vote' => $vote,
        ]);
    }

    /**
     * Vote on a website
     *
     * @param Request $request
     * @param $id
     */
    public function vote(Request $request, $id)
    {
        $website = Website::findOrFail($id);

        $thisMonth = Carbon::now('UTC');
        $thisMonth->subDays(30);

        // create a vote for this site and recalculate site votes
        // by session id
        if ($request->user()) {
            $vote = Vote::where([
                'website_id' => $website->id,
                'user_id' => $request->user()->id,
            ])
                ->where('updated_at', '>=', $thisMonth->format('Y-m-d H:i:s'))
                ->first();
        } else {
            $vote = Vote::where([
                'website_id' => $website->id,
                'session_id' => $request->session()->getId(),
            ])
                ->where('updated_at', '>=', $thisMonth->format('Y-m-d H:i:s'))
                ->first();
        }

        // create or update the vote
        $vote = $vote ?: new Vote();
        $vote->website_id = $website->id;
        $vote->value = 1;
        $vote->type = 'vote';
        if ($request->user()) {
            $vote->user_id = $request->user()->id;
        } else {
            $vote->session_id = $request->session()->getId();
        }
        $vote->save();

        // update website vote status
        $website->last_voted = Carbon::now('UTC')->toDateTimeString();
        $website->save();
        $website->updateVoteCount();

        // Update calculations
        Websites::calculateRanksForCategory(null);
        $categories = $website->categories;
        foreach ($categories as $category) {
            Websites::calculateRanksForCategory($category);
        }

        // else redirect to view page
        return redirect(route('site', ['slug' => $website->slug]));

    }

    /**
     * List your website listings
     *
     * @param Request $request
     * @return mixed
     */
    public function userIndex(Request $request)
    {
        $websites = Website::where('user_id', $request->user()->id)->paginate(10);

        return view('websites.userIndex', [
            'websites' => $websites
        ]);
    }

    /**
     * Form for a new website
     *
     * @param Request $request
     * @return mixed
     */
    public function userNew(Request $request)
    {
        $categories = Category::all();

        $keys = array_map(function($category) {
            return $category->id;
        }, $categories->all());

        $names = array_map(function($category) {
            return $category->name;
        }, $categories->all());

        $selectCategories = array_combine($keys, $names);

        return view('websites.userNew', [
            'selectCategories' => $selectCategories
        ]);
    }

    /**
     * Create a website listing
     *
     * @param Request $request
     * @return mixed
     */
    public function userCreate(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'domain' => [
                'required',
                'regex:/^(https?:\/\/)([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
                'unique:websites,domain',
            ],
            'name' => 'required|min:2|max:140',
            'description' => 'required|max:2000',
            'pinterest' => [
                'regex:/^(https?:\/\/)([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            ],
            'tpt' => [
                'regex:/^(https?:\/\/)([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            ],
        ], [
            'pinterest.regex' => 'Your Pinterest link is not a proper URL',
            'tpt.regex' => 'Your TeachersPayTeachers link is not a proper URL',
        ]);

        if ($validator->fails()) {
            return redirect(route('sites.userNew'))
                ->withErrors($validator)
                ->withInput();
        }

        if (Website::where('user_id', $request->user()->id)->count() > 0) {
            $request->session()->flash('website-error', 'You have already created a blog listing.');
            return redirect(route('sites.userNew'));
        }

        $data['user_id'] = $request->user()->id;

        $website = Website::create($data);

        // do some cool shit with the info
        if ($request->input('category')) {
            $website->categories()->attach($request->input('category'));
        }

        Websites::calculateRanksForCategory(null);
        if ($request->input('category')) {
            Websites::calculateRanksForCategory(Category::find($request->input('category')));
        }

        return redirect(route('sites.userView', ['id' => $website->id]));
    }

    /**
     * View your website property
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function userView(Request $request, $id)
    {
        $website = Website::where(['id' => $id, 'user_id' => $request->user()->id])->firstOrFail();

        $categories = Category::all();

        $keys = array_map(function($category) {
            return $category->id;
        }, $categories->all());

        $names = array_map(function($category) {
            return $category->name;
        }, $categories->all());

        $selectCategories = array_combine($keys, $names);

        return view('websites.userView', [
            'website' => $website,
            'selectCategories' => $selectCategories
        ]);
    }

    /**
     * Run the edit on a website
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function userEdit(Request $request, $id)
    {
        $website = Website::where(['id' => $id, 'user_id' => $request->user()->id])->firstOrFail();

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2|max:140',
            'description' => 'max:2000',
            'pinterest' => [
                'regex:/^(https?:\/\/)([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            ],
            'tpt' => [
                'regex:/^(https?:\/\/)([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            ],
        ], [
            'pinterest.regex' => 'Your Pinterest link is not a proper URL',
            'tpt.regex' => 'Your TeachersPayTeachers link is not a proper URL',
        ]);

        if ($validator->fails()) {
            return redirect(route('sites.userView', ['id' => $website->id]))
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only([
            'name',
            'description',
            'pinterest',
            'tpt',
        ]);

        $website->update($data);

        return redirect(route('sites.userView', ['id' => $website->id]));
    }

    public function userDelete(Request $request, $id)
    {
        $website = Website::where(['id' => $id, 'user_id' => $request->user()->id])->firstOrFail();
        $categories = $website->categories;

        $website->delete();

        // Calculate ranks
        Websites::calculateRanksForCategory(null);
        foreach ($categories as $category) {
            Websites::calculateRanksForCategory($category);
        }

        // else redirect to view page
        return redirect(route('sites.userIndex'));
    }
}
