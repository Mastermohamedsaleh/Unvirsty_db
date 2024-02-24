<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\College;
use App\Models\Student;
use Illuminate\Support\Facades\Session;


class GraduatedController extends Controller
{
 
    public function index()
    {

        $students = Student::onlyTrashed()->get();

        return view('Admin.graduated.index',compact('students'));
    }


    public function create()
    {
        $colleges = College::where('id',auth()->user()->college_id)->get();
        return view('Admin.graduated.create',compact('colleges'));
        
    }


    public function store(Request $request)
    {
        
 if($request->section_id){
   $students = Student::where('college_id',$request->college_id)->where('classroom_id',$request->classroom_id)->where('section_id',$request->section_id)->get();
 }else{
     $students = Student::where('college_id',$request->college_id)->where('classroom_id',$request->classroom_id)->get();
 }

 if($students->count() < 1){
    return redirect()->back()->withErrors(['msg' => 'No Students']);
}


foreach ($students as $student){
    $ids = explode(',',$student->id);  // [1,2,3,4]
    Student::whereIn('id', $ids)->Delete();
}

Session::flash('message', 'Graduated Success');
return redirect()->route('graduated.index');
         
    }

 


    public function update(Request $request, $id)
    {
        student::onlyTrashed()->where('id', $id)->first()->restore();
        Session::flash('message', 'Return Success');
        return redirect()->route('graduated.index');
    }


    public function destroy( Request $request , $id)
    {
        student::onlyTrashed()->where('id', $id)->first()->forceDelete();
        Session::flash('message', 'Delete Success');
        return redirect()->back();
    }
}
