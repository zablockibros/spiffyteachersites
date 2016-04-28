<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }
}
