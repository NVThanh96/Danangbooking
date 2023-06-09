<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMail extends FormRequest
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
            'last_name' => 'required',
            'first_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:10',
            'checkin' => 'required|date|before:checkout',
            'checkout' => 'required|date|after:checkin',
        ];
    }
}
