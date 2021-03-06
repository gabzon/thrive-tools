<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhaseStoreRequest extends FormRequest
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
            'slug' => 'required|string',
            'description' => 'string',
            'icon' => 'string',
            'image' => 'string',
            'color' => 'required|string|max:20',
        ];
    }
}
