<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Library;
use App\Models\Course;
use App\Models\Doctor_section;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LibraryRequest;
use Illuminate\Support\Facades\Auth;
use File;

class LibraryController extends Controller
{
    public function index()
    {
        $libraries = Library::where('doctor_id',auth()->user()->id)->get();
        return view('Doctor.My_Library.index',compact('libraries'));
    }


    public function create()
    {
        $courses = Course::where('doctor_id',auth()->user()->id)->get();
        return view('Doctor.My_Library.create',compact('courses'));
    }



    public function store(Request $request)
    {

     
$course = Course::where('id' , $request->course_id)->first();

try{
    $fileName = time().'.'.$request->file('file_name')->extension();  
    $request->file('file_name')->move(public_path('Library'), $fileName);
    $library = new Library();
    $library->title = $request->title;
    $library->file_name =   $fileName;
    $library->doctor_id =  auth()->user()->id;
    $library->course_id =  $request->course_id;
    $library->college_id =  $course->college_id;
    $library->classroom_id =  $course->classroom_id;
    $library->section_id =  $course->section_id;
    $library->save();
    Session::flash('message', 'Add Success');
    return redirect()->back();
      


    } catch (\Exception $e) {
         return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
    }



    public function ShowToStudent(){
        $course_id = Course::where('college_id',  Auth::guard('student')->user()->college_id)
        ->where('classroom_id',  Auth::guard('student')->user()->classroom_id)
        ->where('section_id', Auth::guard('student')->user()->section_id)
        ->orderBy('id', 'DESC')
        ->pluck('id');
        $libraries =  Library::where('course_id', $course_id)->get();
        if($libraries){
        return view('Student.Library.index',compact('libraries'));
        }else{
            return redirect()->back();
        }
      
      

    }


    public function ViewCourse($library_id){

        Library::findorFail($library_id);
        $library = Library::where('id',$library_id)->where('college_id',  Auth::guard('student')->user()->college_id)
        ->where('classroom_id',  Auth::guard('student')->user()->classroom_id)
        ->where('section_id', Auth::guard('student')->user()->section_id)->first();
        if($library){
           $file_name =  $library->file_name;
           return view('Student.Library.show',compact('file_name'));
        }else{
            return redirect()->back();
        }
         
    }

}
