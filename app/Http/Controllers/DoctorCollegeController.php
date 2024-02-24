<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Classroom;
use App\Models\Section;
use App\Models\Doctor;
use App\Models\Course;
use App\Models\Doctor_college;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\DoctorCollegeRequest;



class DoctorCollegeController extends Controller
{
 
    public function index()
    {
        $doctors =  Doctor::where('college_id',auth()->user()->college_id)->get();   
        return view('Admin.doctor_college.index',compact('doctors')); 
    }


    public function create()
    {
        $data['colleges'] = College::all();
        $data['doctors'] = Doctor::where('college_id',auth()->user()->college_id)->get();
        $data['courses'] = Course::where('college_id',auth()->user()->college_id)->get();
        return view('Admin.doctor_college.add',$data);
    }

  
    public function store(DoctorCollegeRequest $request)
    {
               
        
        $doctor = $request->doctor;
        $college = $request->college_id;
        $classroom = $request->classroom_id;

        if($request->section_id){
           $section =  $request->section_id;
        }else{ 
           $section = null;
        }


        for($i = 0 ; $i < count($doctor) ; $i++){
            $insert = [
              'doctor_id' => $doctor[$i],
              'college_id'=>$college,
              'classroom_id'=>$classroom,
                'section_id'=>$section,
            ];
           DB::table('doctor_colleges')->insert($insert);
      }
        
      Session::flash('message', 'Add Success');
      return redirect()->back();
        

          

    }

  
    public function show($id)
    {

        $doctor = Doctor_college::where('id',$id )->where('college_id',auth()->user()->college_id)->first();
        if( !$doctor  ){
           return redirect()->back();
        }


          $doctor_colleges =  Doctor_college::where('doctor_id',$id)->get();
          return view('Admin.doctor_college.show',compact('doctor_colleges'));
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

        Doctor_college::findOrFail($id)->delete();
        Session::flash('message', 'Delete Success');
        return redirect()->back();
    }
}
