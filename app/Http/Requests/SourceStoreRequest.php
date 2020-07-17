<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SourceStoreRequest extends FormRequest
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
            'type' => 'required|in:book,chapter,article,newspaper,website,conference',
            'author' => 'string',
            'title' => 'string',
            'location' => 'nullable|string',
            'publisher' => 'nullable|string',
            'year' => 'nullable|integer',
            'isbn10' => 'nullable|string',
            'isbn13' => 'nullable|string',
            'url' => 'nullable|url',
            'chapter_title' => 'nullable|string',
            'pages' => 'nullable|string',
            'affiliate_link' => 'nullable|url',
            'image' => 'nullable|image|max:1024|mimes:png,jpg,jpeg,gif',
            'visited_on' => 'nullable|date',
            'number' => 'nullable|integer',
            'volume' => 'nullable|string',
            'edition' => 'nullable|string',
        ];
    }
}
