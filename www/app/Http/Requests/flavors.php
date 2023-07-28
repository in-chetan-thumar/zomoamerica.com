<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class flavors extends FormRequest
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
            //
            'flavor_title' => 'required|max:100',
            'flavor_description' => 'required|max:400',
            // 'category_id' => 'required',
            'sweet' => 'required|max:10',
            'citric' => 'required|max:10',
            'tobaco_intensity' => 'required|max:10',
            'menthol' => 'required|max:10',
            'cloud_volume' => 'required|max:10',
            'flavors_available' => 'required',
            'slug' => 'required|max:40',
            // 'flavors_image' => 'required',
        ];
    }
}