<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name'=>'required',
            'email' => "required|email|unique:doctors,email,$this->id,id",
             'password'=>'required|string|min:6|max:10',
             'ssn'=>'required',
             'address'=>'required',
             'gender_id'=>'required',
             'nationalitie_id'=>'required',
             'Joining_Date'=>'required'

        ];

        if($this->id) {
            return array_merge($rules, ['password' => 'required|min:6']);
        }
        
        return $rules;


    }
}
