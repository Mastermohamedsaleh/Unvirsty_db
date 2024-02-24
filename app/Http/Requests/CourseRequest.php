<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'college_id'=>'required|exists:colleges,id',
            'classroom_id'=>'required|exists:classrooms,id',
            'doctor_id'=>'required|exists:doctors,id',
            'name'=>'required',
        ];
    }


    public function messages()
    {
        return [
            'college_id.exists' => 'Enter College',
            'classroom_id.exists' => 'Enter Classroom',
            'classroom_id.required' => 'Enter Classroom',
            'college_id.required' => 'Enter College',
            'doctor_id.exists' => 'Enter Doctor',
            'doctor_id.required' => 'Enter Doctor',
        ];
    }
}
