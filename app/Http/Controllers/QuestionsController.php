<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;
use App\Category;
use Excel;
use Validator;

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
    public function view($slug = null)
    {
        $question = Question::where('slug', $slug)->firstOrFail();;
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
        $questions = Question::orderBy('id', 'desc')->paginate(25);

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
            'difficulty' => 'required|in:easy,medium,hard,very-hard',
            'choices' => 'string'
        ]);

        if (!empty($request->input('choices'))) {
            $choices = explode('|', $request->input(('choices')));
            $request->merge([
                'choices' => serialize($choices)
            ]);
        }
        $question = $request->user()->questions()->create($request->all());
        $question->tag($request->input('tags'));
        $question->save();

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
            'difficulty' => 'required|in:easy,medium,hard,very-hard',
            'choices' => 'string'
        ]);

        if (!empty($request->input('choices'))) {
            $choices = explode('|', $request->input(('choices')));
            $request->merge([
                'choices' => serialize($choices)
            ]);
        }
        $question->retag($request->input('useTags', $question->tagList));
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

    /**
     * @param Request $request
     * @return mixed
     */
    public function userExcel(Request $request)
    {
        return view('questions.userExcel', [
        ]);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function userExcelUpload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            Excel::load($file, function($reader) {
                $count = 0;
                $questions = [];
                $data = $reader->toArray();
                $general = Category::where('slug', 'general')->first();

                foreach($data as $row) {
                    if (!empty($row['added'])) {
                        if ($row['added']) {
                            continue;
                        }
                    }
                    if (empty($row['name'])) {
                        $row['name'] = str_limit($row['question'], 64);
                    }
                    if (!empty($row['category'])) {
                        $category = Category::where('slug', 'LIKE', '%'.trim($row['category']).'%')->first();
                        if ($category) {
                            $row['category_id'] = $category->id;
                        }
                    }
                    if (empty($row['category_id']) && $general) {
                        $row['category_id'] = $general->id;
                    } else if (empty($row['category_id'])) {
                        $row['category_id'] = null;
                    }
                    if (empty($row['difficulty'])) {
                        $row['difficulty'] = 'easy';
                    } else if (in_array(trim($row['difficulty']), array_keys(Question::DIFFICULTIES))) {
                        $row['difficulty'] = trim($row['difficulty']);
                    } else {
                        $row['difficulty'] = 'easy';
                    }

                    $data = array_only($row, ['name', 'category_id', 'question', 'answer', 'difficulty', 'tags']);

                    $validator = Validator::make(
                        $data,
                        [
                            'question'  => 'required|max:2000',
                            'answer'    => 'required|max:255',
                        ]
                    );
                    if ($validator->fails()) {
                        continue;
                    }

                    if ($question = Question::create($data)) {
                        if (!empty($data['tags'])) {
                            $question->tag($data['tags']);
                            $question->save();
                        }
                        $count++;
                        $questions[] = $question;
                    }
                }

                echo 'RECORDS CREATED: '.$count.'<br />';
                dump($questions);
            });
        }

        return view('questions.userExcel', [
        ]);
    }
}
