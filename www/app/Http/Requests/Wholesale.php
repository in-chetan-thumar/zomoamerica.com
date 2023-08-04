<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Wholesale extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'bname' => 'required|max:100',
            'fname' => 'required|max:20',
            'lname' => 'required|max:20',
            'address' => 'required|max:40',
            'city' => 'required|max:10',
            'zipcode' => 'required|max:10',
            'email' => 'required|email',
            'number' => 'required|max:10',
             'g-recaptcha-response' => 'required|captcha',
            'state' => 'required',
            'website' => 'max:70'
        ];
    }
    public function messages()
    {
        return [];
    }

}
