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
     * Create a new question.
     *
     * @param  Request  $request
     * @return Response
     */
    public function userCreate(Request $request)
    {
        $this->validate($request, [
            'question'  => 'required|max:2000',
            'answer'    => 'required|max:255',
        ]);

        $request->user()->questions()->create([
            'question'  => $request->question,
            'answer'    => $request->answer,
        ]);

        return redirect('/user/questions');
    }
}
