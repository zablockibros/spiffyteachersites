<?php

namespace App\Http\Controllers;

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

        return view('websites.view', [
            'website' => $website
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

        // create a vote for this site and recalculate site votes
        // by session id

        // if is application/json return json

        // else redirect to view page
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

        $website->delete();

        // else redirect to view page
        return redirect(route('sites.userIndex'));
    }
}
