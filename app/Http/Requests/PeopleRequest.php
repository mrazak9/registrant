<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopleRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'nickname' => 'nullable|string|max:255',
            'preTitle' => 'nullable|string|max:255',
            'postTitle' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'birthDate' => 'nullable|date',
            'birthPlace' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'religion' => 'nullable|string|max:255',
            'matrimony' => 'nullable|string|max:255',
            'bornSequence' => 'nullable|integer',
            'siblingTotal' => 'nullable|integer',
            'createdBy' => 'nullable|integer',
            'updatedBy' => 'nullable|integer',
            'identity_number' => 'nullable|string|max:255',
        ];
    }
}
