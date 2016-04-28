<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;

class CategoriesController extends Controller
{
    /**
     * List trivia by category
     *
     * @return \Illuminate\Http\Response
     */
    public function view($slug = null)
    {
        $category = App\Category::where('slug', '=', $slug)->firstOrFail();
        $questions = $category->questions->simplePaginate(10);;

        return view('home', [
            'category'  => $category,
            'questions' => $questions
        ]);
    }
}
