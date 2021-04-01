<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BookmarkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * 
     * @return array
     */
    public function rules() {
        return [
            'link_title' => [
                'required',
                'max:100',
                Rule::unique('bookmarks')->ignore($this->bookmark)
            ],
            'url' => 'required|url',
            'category_id' => 'nullable|sometimes|exists:App\Category,id'
        ];
    }
} 
