<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionStoreRequest;
use App\Http\Requests\QuestionUpdateRequest;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $questions = Question::all();

        return view('question.index', compact('questions'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('question.create');
    }

    /**
     * @param \App\Http\Requests\QuestionStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionStoreRequest $request)
    {
        $question = Question::create($request->all());

        $request->session()->flash('success', 'Question added successfully');

        return redirect()->route('question.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Question $question)
    {
        return view('question.show', compact('question'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Question $question)
    {
        return view('question.edit', compact('question'));
    }

    /**
     * @param \App\Http\Requests\QuestionUpdateRequest $request
     * @param \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionUpdateRequest $request, Question $question)
    {
        $question->update([
            'question' => $request->question,
            'description' => $request->description,
        ]);

        $request->session()->flash('success', 'Question updated successfully');

        return redirect()->route('question.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Question $question)
    {
        $question->delete();
        
        $request->session()->flash('success', 'Question deleted successfully');

        return redirect()->route('question.index');
    }
}
