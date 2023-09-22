<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
           
            'fname' => 'required|max:20',
            'lname' => 'required|max:20',
            'city' => 'required|max:30',
            'email' => 'required|email|max:100',
            'number' => 'required|max:10',
            'state' => 'required|max:50',
        ];
    }
}