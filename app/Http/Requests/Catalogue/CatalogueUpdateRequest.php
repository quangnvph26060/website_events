<?php

namespace App\Http\Requests\Catalogue;

use Illuminate\Foundation\Http\FormRequest;

class CatalogueUpdateRequest extends FormRequest
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
        // dd($this->catalogue->id);
        return [
            'name' => 'required|string|unique:catalogues,name,' . $this->catalogue->id,
            'image' => 'nullable|image|max:2048|mimes:png,jpg,jpeg',
            'slug' => 'required|string|unique:catalogues,slug,' . $this->catalogue->id,
            'description' => 'nullable|string',
            'parent_id' => 'nullable|sometimes|integer',
            'status' => 'nullable|boolean',
        ];
        // |exists:catalogues,id
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
