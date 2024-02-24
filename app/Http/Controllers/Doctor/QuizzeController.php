<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\College;
use App\Models\Quizze;
use App\Models\Question;
use App\Models\Course;      // Change All Subject Into Course
use App\Models\Doctor;
use App\Models\Degree;

class QuizzeController extends Controller
{
    public function index()
    {
        $quizzes = Quizze::where('doctor_id',auth()->user()->id)->get();
        return view('Doctor.Quizzes.index', compact('quizzes'));
    }


    public function create()
    {
        $data['colleges'] = College::all();
        $data['subjects'] = Subject::where('doctor_id',auth()->user()->id)->get();
        $data['doctors'] = Doctor::all();
        return view('Doctor.Quizzes.create', $data);
    }


    public function store(Request $request)
    {
        try {
            $quizzes = new Quizze();
            $quizzes->name = $request->name;
            $quizzes->subject_id = $request->subject_id;
            $quizzes->college_id = $request->college_id;
            $quizzes->classroom_id = $request->classroom_id;
            $quizzes->section_id = $request->section_id;
            $quizzes->doctor_id = auth()->user()->id;
            $quizzes->save();
            Session::flash('message', 'Add Success');
            return redirect()->route('quizzes.index');
        }
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function show($id)
    {
        $questions = Question::where('quizze_id',$id)->get();
        $quizz = Quizze::findorFail($id);
        return view('Doctor.Questions.index',compact('questions','quizz'));
    }


    public function edit($id)
    {
        $quizz = Quizze::findorFail($id);
        $data['colleges'] = College::all();
        $data['subjects'] =  Subject::where('doctor_id',auth()->user()->id)->get();
        $data['doctors'] = Doctor::all();
        return view('Doctor.Quizzes.edit', $data, compact('quizz'));
    }


    public function update(Request $request, $id)
    {
        try {
            $quizz = Quizze::findorFail($request->id);
            $quizzes->name = $request->name;
            $quizzes->subject_id = $request->subject_id;
            $quizzes->college_id = $request->college_id;
            $quizzes->classroom_id = $request->classroom_id;
            $quizzes->section_id = $request->section_id;
            $quizzes->doctor_id = auth()->user()->id;
            $quizz->save();
            Session::flash('message', 'Update Success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function destroy(Request $request ,$id)
    {
        try {
            Quizze::destroy($request->id);
            Session::flash('message', 'Delete Success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }



    public function student_quizze($quizze_id)
    {
        $degrees = Degree::where('quizze_id', $quizze_id)->get();
        return view('Doctor.Quizzes.student_quizze', compact('degrees'));
    }
}
