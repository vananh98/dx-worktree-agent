<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'alpha_dash', Rule::unique('categories', 'slug')],
            'description' => ['nullable', 'string'],
            'parent_id' => ['nullable', 'integer', Rule::exists('categories', 'id')],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
