<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;

class QuestionsController extends Controller
{
    /**
     * Show all questions
     *
     * @return Response
     */
    public function index()
    {
        $questions = Question::paginate(15);

        return view('questions.index', ['questions' => $questions]);
    }

    /**
     * Show a question
     *
     * @return Response
     */
    public function view($id = null)
    {
        $question = Question::findOrFail($id);

        return view('questions.view', ['question' => $question]);
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

        return view('questions.users.index', [
            'questions' => $questions,
        ]);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function userNew(Request $request)
    {
        return view('questions.userNew', []);
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
            'question'  => 'required|max:2000',
            'answer'    => 'required|max:255'
        ]);

        $request->user()->questions()->create($request->all());

        $request->session()->flash('question', 'Question successfully added!');

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

        return view('questions.userView', [
            'question'  => $question
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
            'name' => 'required|string',
            'description' => 'string'
        ]);

        $question->fill($request->all())->save();

        $request->session()->flash('question', 'question successfully updated!');

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

        $request->session()->flash('question', 'question successfully deleted!');

        return redirect()->route('questions.userIndex');
    }
}
