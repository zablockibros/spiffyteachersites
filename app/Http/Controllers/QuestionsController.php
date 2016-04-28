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
}
