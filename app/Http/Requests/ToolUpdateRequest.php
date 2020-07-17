<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToolUpdateRequest extends FormRequest
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
            'name' => 'required|string|max:100',            
            'tagline' => 'nullable|string',
            'participants' => 'nullable|string',
            'icon' => 'nullable|string',
            'image' => 'file|max:1024|mimes:png,jpg,jpeg,gif',            
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
            'tips' => 'nullable|string',
            'duration' => 'nullable|integer',
            'duration_unit' => 'nullable|string',            
        ];
    }
}
