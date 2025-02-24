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
            'address' => 'required|max:100',
            'city' => 'required|max:30',
            'zipcode' => 'required|max:6',
            'email' => 'required|email|max:100',
            'number' => 'required|max:10',
            'state' => 'required',
            'website' => 'max:70',
            // 'g-recaptcha-response' => 'required|captcha'
        ];
    }
    public function messages()
    {
        return [
            // 'g-recaptcha-response' => 'Google captcha is required',
        ];
    }

}
