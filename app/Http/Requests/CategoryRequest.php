<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class CategoryRequest extends FormRequest {

    public function authorize() {
        return true;
    }


    protected function prepareForValidation() {
        $this->merge([
            'slug' => Str::slug($this->category_name)
        ]);
    } 


    public function rules() {
        return [
            'category_name' => [
                'required',
                'max:20',
                Rule::unique('categories')->ignore($this->category)
            ],
            'slug' => 'required'
        ];
    }
}
