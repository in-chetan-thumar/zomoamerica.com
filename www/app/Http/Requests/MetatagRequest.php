<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MetatagRequest extends FormRequest
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
            'meta_title' => 'required|max:50',
            'meta_description' => 'required',
            'meta_keyword' => 'required|max:30',
            'meta_route' => 'required|max:40',
        ];
    }
}
