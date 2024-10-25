<?php

namespace App\Http\Requests\Catalogue;

use Illuminate\Foundation\Http\FormRequest;

class CatalogueStoreRequest extends FormRequest
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
            'name' => 'required|string|unique:catalogues,name',
            'image' => 'nullable|image|max:2048|mimes:png,jpg,jpeg',
            'slug' => 'required|string|unique:catalogues,slug',
            'description' => 'nullable|string',
            'status' => 'nullable|boolean',
            'is_tag' => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return __('request.messages');
    }

    public function attributes(): array
    {
        return [
            'name' => 'Tên danh mục',
            'image' => 'Ảnh',
            'slug' => 'Slug',
            'description' => 'Mô tả',
            'parent_id' => 'Danh mục cha',
        ];
    }
}
