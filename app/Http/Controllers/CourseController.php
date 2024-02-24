<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Doctor;
use App\Models\College;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{

    public function index()
    {
        $data['courses'] = Course::all();
        $data['doctors'] = Doctor::all();
        return view('Admin.courses.index',$data);
    }

 

    public function create()
    {
        $data['courses'] = Course::all();
        $data['colleges'] = College::where('id',auth()->user()->college_id)->get();
        $data['doctors'] = Doctor::where('college_id',auth()->user()->college_id)->get();
        return view('Admin.courses.create',$data);
    }

 
    public function store(CourseRequest $request)
    {
        try {
            $name = $request->name;
            $college = $request->college_id;
            $classroom = $request->classroom_id;
            $section = $request->section_id;
            $doctor = $request->doctor_id;

            for($i =0 ; $i < count($name) ; $i++){
                  $insert = [
                    'name' => $name[$i],
                    'doctor_id'=>$doctor[$i],
                    'college_id'=>$college,
                    'classroom_id'=>$classroom,
                    'section_id'=>$section,
                  ];
                 DB::table('courses')->insert($insert);
            }  
            Session::flash('message', 'Add Success'); 
            return redirect()->route('course.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
       $course    =  Course::findorfail($id);
       $colleges  =  College::all();
       $doctors   =   Doctor::all();
       return view('Admin.courses.edit',compact('course','colleges','doctors'));
    }

    public function update(CourseRequest $request, $id)
    {
     
        
        try {

            $course = Course::findOrFail($id);

          

                $course->name = $request->name;
                $course->college_id = $request->college_id;
                $course->classroom_id = $request->classroom_id;
                $course->section_id = $request->section_id;
                $course->doctor_id = $request->doctor_id;
             $course->save();
            Session::flash('message', 'Udpate Success'); 
       
            return redirect()->route('course.index');
        }

        catch(\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }


    public function destroy($id)
    {
        Course::findOrFail($id)->delete();
        Session::flash('message', 'Delete Success');
        return redirect()->route('course.index');
    }
}
