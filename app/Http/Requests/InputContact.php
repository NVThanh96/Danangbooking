<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputContact extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'title' => 'required',
            'message' => 'required',
        ];
    }
    public function messages()
    {
        $message = [
            'required' => 'The :attribute field is required.',
            'email' => 'Please enter a valid email address.'
        ];
        return $message;
    }
}
