<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contact extends FormRequest
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
            'email' => 'required|max:50',
            'subject' => 'required|max:50',
            'message' => 'required|max:150',
            'g-recaptcha-response' => 'required|captcha'

        ];
    }
    public function messages()
    {
        return [
            'g-recaptcha-response' => 'Google captcha is required',
        ];
    }

}
