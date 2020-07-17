<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuideUpdateRequest extends FormRequest
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
            'slug' => 'nullable|string',
            'description' => 'string',
            'icon' => 'string',
            'image' => 'file|max:1024|mimes:png,jpg,jpeg,gif',            
        ];
    }
}

