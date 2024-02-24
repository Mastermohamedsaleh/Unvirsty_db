<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminrequest extends FormRequest
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
        return [
            'name'=>'required',
            'email' => 'required|email|unique:admins,email,'.$this->id,
            'password'=>'required|string|min:6|max:10',
            'college_id'=>'required|exists:colleges,id',
        ];
    }
    
    public function messages()
    {
        return [
            'college_id.exists' => 'Enter College',
            'college_id.required' => 'Enter College'
        ];
        }
}
