<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCategoryStore extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_name'=> 'required|string|max:255',
            // 'category_description'=> 'string',
            'category_image'=> 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'category_slug'=> 'string|unique:categories,slug',

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'category_name.required' => 'Category name is required',
            'category_name.string' => 'Category name must be a string',
            'category_name.max' => 'Category name must be less than 255 characters',
            // 'category_description.string' => 'Category description must be a string',
            'category_image.required' => 'Category image is required',
            'category_image.image' => 'Category image must be an image',
            'category_image.mimes' => 'Category image must be a jpeg, png, jpg, gif, or svg',
            'category_image.max' => 'Category image must be less than 2048 kilobytes',
            // 'category_slug.string' => 'Category slug must be a string',
        ];
    }
}
