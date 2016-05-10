<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;
use App\Category;

class QuestionsController extends Controller
{
    public function home(Request $request)
    {
        $questions = Question::orderBy('id', 'desc')->paginate(7);
        $categories = Category::all();

        return view('questions.home', [
            'questions' => $questions,
            'categories' => $categories
        ]);
    }
    
    /**
     * Show all questions
     *
     * @return Response
     */
    public function index()
    {
        $questions = Question::orderBy('id', 'desc')->paginate(15);
        $categories = Category::all();

        return view('questions.index', [
            'questions' => $questions,
            'categories' => $categories
        ]);
    }

    /**
     * Show a question
     *
     * @return Response
     */
    public function view($id = null)
    {
        $question = Question::findOrFail($id);
        $categories = Category::all();

        return view('questions.view', [
            'question' => $question,
            'categories' => $categories
        ]);
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function userIndex(Request $request)
    {
        $questions = $request->user()->questions()->get();

        return view('questions.userIndex', [
            'questions' => $questions,
        ]);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function userNew(Request $request)
    {
        $categories = Category::lists('name', 'id');

        return view('questions.userNew', [
            'categories' => $categories,
            'difficulties' => Question::DIFFICULTIES
        ]);
    }

    /**
     * Create a new question.
     *
     * @param  Request  $request
     * @return Response
     */
    public function userCreate(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string',
            'question'  => 'required|max:2000',
            'answer'    => 'required|max:255',
            'difficulty' => 'required|in:easy,medium,hard,very-hard'
        ]);

        $request->user()->questions()->create($request->all());

        $request->session()->flash('question-success', 'Question successfully added!');

        return redirect()->back();
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function userView(Request $request, $id)
    {
        $question = Question::findOrFail($id);
        $categories = Category::lists('name', 'id');

        return view('questions.userView', [
            'question'  => $question,
            'categories' => $categories,
            'difficulties' => Question::DIFFICULTIES
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function userUpdate(Request $request, $id)
    {
        $question = Question::findOrFail($id);

        $this->validate($request, [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string',
            'question'  => 'required|max:2000',
            'answer'    => 'required|max:255',
            'difficulty' => 'required|in:easy,medium,hard,very-hard'
        ]);

        $question->fill($request->all())->save();

        $request->session()->flash('question-success', 'question successfully updated!');

        return redirect()->back();
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function userDelete(Request $request, $id)
    {
        $question = Question::findOrFail($id);

        $question->delete();

        $request->session()->flash('question-success', 'question successfully deleted!');

        return redirect()->route('questions.userIndex');
    }
}
