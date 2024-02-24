<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

use App\Models\ExamSchedule;

class ExamScheduleStudentController extends Controller
{
    public function index(){

        $examschedule = ExamSchedule::where('college_id',  Auth::guard('student')->user()->college_id)
        ->where('classroom_id',    Auth::guard('student')->user()->classroom_id)
        ->where('section_id', Auth::guard('student')->user()->section_id)
        ->get();

        return view('Student.examschedule.index',compact('examschedule'));


    }

}
