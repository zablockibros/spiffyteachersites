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

    public function vote(Request $request, $id)
    {
        $website = Website::findOrFail($id);

        // create a vote for this site and recalculate site votes
        // by session id

        // if is application/json return json

        // else redirect to view page
    }

    public function userIndex(Request $request)
    {
        $websites = Website::where('user_id', $request->user()->id)->paginate(10);

        return view('websites.userIndex', [
            'websites' => $websites
        ]);
    }

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
    
    public function userCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'domain' => [
                'required',
                'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'
            ],
            'name' => 'required|min:2|max:140',
            'description' => 'required|max:2000',
        ]);

        if ($validator->fails()) {
            return redirect('user/sites/new')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only(['domain','name','description']);
        $data['user_id'] = $request->user()->id;

        //echo '<pre>';
        //print_r($request->all());
        //echo '</pre>';
        //die();

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

    public function userEdit(Request $request, $id)
    {
        $website = Website::findOrFail($id);

        // if is application/json return json

        // else redirect to view page
    }

    public function userDelete(Request $request, $id)
    {
        $website = Website::findOrFail($id);

        // if is application/json return json

        // else redirect to view page
    }
}
