<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserProfileRequest extends FormRequest
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
        $user_id = auth()->user()->id;

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [ 'required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user_id),],
            'mobile' => ['required', 'numeric', 'digits:10', Rule::unique('users', 'mobile')->ignore($user_id), ],
            'profile' => ['nullable', 'mimes:png,jpg,jpeg'],
        ];
    }
}
