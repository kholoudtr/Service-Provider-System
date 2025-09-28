<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // TODO: Implement authorization
        // Check if user is authenticated and has admin role
        return true; // Temporarily allow all for testing
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // TODO: Implement validation rules for creating categories
        // Required fields: name
        // Optional fields: parent_id
        // Validation: unique name, valid parent_id if provided
        return [
            // 
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        // TODO: Add custom validation messages
        return [
            // TODO: Add custom messages here
        ];
    }
}
