<?php

namespace App\Http\Controllers\Surveys;

use App\Http\Requests\SurveyStoreRequest;
use App\Surveys\Question;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveyController extends Controller
{

    protected $user;

    public function __construct(Guard $guard)
    {

        $this->user = $guard->user();
    }

    public function index()
    {
        $questions = Question::with('answers')->get();

        $questions->load(['responses' => function($query) {

            $query->where('user_id', $this->user->id);

        }])->each(function($question) {

            $question->response = $question->responses->first();

        })->reject(function($response) {
            return empty($response);
        });

        $responses = $questions->map(function($question) {

            return $question->response;

        })->reject(function($response) {

            return empty($response);

        });

        return view('surveys.index', compact('questions', 'responses'));
        
    }

    public function show()
    {
        $questions = Question::with('answers')->get();

        $questions->load(['responses' => function($query) {

            $query->where('user_id', $this->user->id);

        }])->each(function($question) {

            $question->response = $question->responses->first();

        })->reject(function($response) {
            return empty($response);
        });

        $responses = $questions->map(function($question) {

            return $question->response;

        })->reject(function($response) {

            return empty($response);

        });

        return view('surveys.show', compact('questions', 'responses'));

    }

    public function store(SurveyStoreRequest $request)
    {

        $questions = Question::with('answers')->get();

        $questions->each(function($question) use ($request) {

            $answer = $question->answers()->whereId($request->input("question_{$question->id}"))->first();

            $answer->responses()->create(['user_id' => $this->user->id]);

        });

        flash()->success('Success', 'Your answers were saved successfully.');

        return redirect()->route('surveys::index');


    }
}
