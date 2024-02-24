<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class AjaxController extends Controller
{
    

    public function GetCourse($id){
        $list_course = Course::where("classroom_id", $id)->pluck("name", "id");
        return $list_course;
    }


}
