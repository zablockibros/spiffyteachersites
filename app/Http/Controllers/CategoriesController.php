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
        $questions = App\Question::where('category_id', '=', $category->id)->orderBy('id', 'desc')->paginate(10);
        $categories = App\Category::all();

        return view('categories.view', [
            'category'  => $category,
            'questions' => $questions,
            'categories' => $categories
        ]);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function userIndex(Request $request)
    {
        $categories = App\Category::all();

        return view('categories.userIndex', [
            'categories'  => $categories
        ]);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function userNew(Request $request)
    {
        return view('categories.userNew', []);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function userCreate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'string'
        ]);

        $category = App\Category::create($request->all());

        $request->session()->flash('category-success', 'Category successfully added!');

        return redirect()->route('categories.userIndex');
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function userView(Request $request, $id)
    {
        $category = App\Category::findOrFail($id);

        return view('categories.userView', [
            'category'  => $category
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function userUpdate(Request $request, $id)
    {
        $category = App\Category::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'string'
        ]);

        $category->fill($request->all())->save();

        $request->session()->flash('category-success', 'Category successfully updated!');

        return redirect()->back();
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function userDelete(Request $request, $id)
    {
        $category = App\Category::findOrFail($id);

        $category->delete();

        $request->session()->flash('category-success', 'Category successfully deleted!');

        return redirect()->route('categories.userIndex');
    }
}
