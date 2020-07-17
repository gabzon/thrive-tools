<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResourceUpdateRequest extends FormRequest
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
            'slug' => 'string',
            'description' => 'nullable',
            'icon' => 'nullable|string',
            'image' => 'nullable|file|mimes:png,jpg,jpeg,gif',
            'affiliate_url' => 'nullable|string',
        ];
    }
}
