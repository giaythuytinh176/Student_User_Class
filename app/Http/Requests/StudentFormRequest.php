<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'class_id' => 'required|numeric|exists:std_classes,id',
            'address' => 'required|max:255',
            'phone' => 'required|numeric',
            'birthday' => 'required|date_format:Y-m-d|before:today',
            'email' => 'required|email|unique:students',
        ];
    }

    public function messages()
    {
        return [
          'first_name.required' => 'Ban phai nhap First Name',
          'first_name.max' => 'Do dai cua First Name max la 50',
          'email.unique' => 'Email da ton tai',
        ];
    }
}
