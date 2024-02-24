<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\College;
use App\Models\Doctor;

use App\Http\Requests\StudyScheduleRequest;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;



class StudyScheduleController extends Controller
{


    public function index()
    {
        return view('Admin.studyschedule.index');
    }

 
    public function create()
    {
        $colleges = College::where('id',auth()->user()->college_id)->get();
        $doctors = Doctor::where('college_id',auth()->user()->college_id)->get();
        return view('Admin.studyschedule.add',compact('colleges','doctors'));
    }


    public function store(StudyScheduleRequest $request)
    {
        try{  
            $course_id = $request->course_id;
            $college_id = $request->college_id;
            $classroom_id = $request->classroom_id ;
            $section_id = $request->section_id ;
            $doctor_id = $request->doctor_id ;
            $course_day = $request->course_day ;
            $start_time = $request->start_time ;
            $end_time = $request->end_time ;
          
            for($i =0 ; $i < count($course_id) ; $i++){
              $insert = [
                  'course_id'=>$course_id[$i],
                  'course_date' =>$course_day[$i],
                  'start_time' =>$start_time[$i],
                  'end_time' =>$end_time[$i],
                  'doctor_id' =>$doctor_id[$i],
                  'college_id'=>$college_id,
                  'classroom_id'=>$classroom_id,
                  'section_id'=>$section_id,
                  'year' => $request->year,
                  'semester'=> $request->semester
               
              ];
             DB::table('study_schedules')->insert($insert); 
          }
            Session::flash('message', 'Add Success');
            return redirect()->route('studyschedule.index');
      
      
      
      
          }catch (\Exception $e){    
              return redirect()->back()->withErrors(['error' => $e->getMessage()]);
          }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
