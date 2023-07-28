<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Products extends FormRequest
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
            'product_title' => 'required|max:20',
            'product_name' => 'required|max:25',
            'product_description' => 'required|max:150',
            'menthol' => 'required|max:10',
            'sweet' => 'required|max:10',
            'citric' => 'required|max:10',
            'available_in_gm' => 'required|max:10'
        ];
    }
}
