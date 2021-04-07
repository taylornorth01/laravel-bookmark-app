<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class BookmarkRequest extends FormRequest {

    public function authorize() {
        return true;
    }


    protected function prepareForValidation() {
        $this->merge([
            'slug' => Str::slug($this->link_title)
        ]);
    } 


    public function rules() {
        return [
            'link_title' => [
                'required',
                'max:100',
                Rule::unique('bookmarks')->ignore($this->bookmark)
            ],
            'slug' => 'required',
            'url' => 'required|url',
            'category_id' => 'nullable|sometimes|exists:App\Category,id'
        ];
    }
} 
