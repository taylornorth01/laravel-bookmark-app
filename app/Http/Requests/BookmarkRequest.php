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

        $id = isset($this->bookmark) ? $this->bookmark->id : NULL;

        return [
            'link_title' => [
                'required',
                'max:100',
                Rule::unique('bookmarks')->ignore($id)
            ],
            'url' => 'required|url',
            'category_id' => 'nullable|sometimes|exists:App\Category,id'
        ];
    }
} 
