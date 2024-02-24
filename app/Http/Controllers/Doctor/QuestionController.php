<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Question;
use App\Models\Quizze;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    public function index($id)
    {
        // $questions = Question::get();
        // return view('Doctor.Questions.index', compact('questions'));
    }


    public function create()
    {
        $quizzes = Quizze::get();
        return view('Doctor.Questions.create',compact('quizzes'));
    }


    public function store(Request $request)
    {
        try {
            $question = new Question();
            $question->title = $request->title;
            $question->answers = $request->answers;
            $question->right_answer = $request->right_answer;
            $question->score = $request->score;
            $question->quizze_id =  $request->quizz_id;
            $question->save();
            Session::flash('message', 'Add Success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function show($id)
    {
        $quizz_id = $id;
        return view('Doctor.Questions.create', compact('quizz_id'));
    }

    public function edit($id)
    {
        $question = Question::findorfail($id);
        $quizzes = Quizze::get();
        return view('Doctors.Questions.edit',compact('question','quizzes'));
    }

    
    public function update(Request $request, $id)
    {
        try {
            $question = Question::findorfail($request->id);
            $question->title = $request->title;
            $question->answers = $request->answers;
            $question->right_answer = $request->right_answer;
            $question->score = $request->score;
            $question->quizze_id = $request->quizze_id;
            $question->save();
            Session::flash('message', 'Update Success');
            return redirect()->route('questions.index');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function destroy(Request $request,$id)
    {
        try {
            Question::destroy($request->id);
            Session::flash('message', 'Delete Success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
