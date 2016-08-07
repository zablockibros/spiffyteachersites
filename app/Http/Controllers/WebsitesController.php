<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Website;
use App\Category;
use Validator;

class WebsitesController extends Controller
{
    public function view(Request $request, $slug)
    {
        $website = Website::where('slug', $slug)->firstOrFail();
        $categories = Category::all();

        return view('websites.view', [
            'website' => $website,
            'categories' => $categories
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
        $categories = Category::all();

        return view('websites.userIndex', [
            'websites' => $websites,
            'categories' => $categories
        ]);
    }

    public function userNew(Request $request)
    {
        $categories = Category::all();

        return view('websites.userNew', [
            'categories' => $categories
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

        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();

        $website = Website::create($data);

        // do some cool shit with the info

        return redirect(route('sites.userView', ['id' => $website->id]));
    }

    public function userView(Request $request, $id)
    {
        $website = Website::findOrFail($id);
        $categories = Category::all();

        return view('websites.userView', [
            'website' => $website,
            'categories' => $categories
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
