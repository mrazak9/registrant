<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopleAddressRequest extends FormRequest
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
            'peopleId' => 'required|exists:people,id',
            'name' => 'required|max:255',
            'street' => 'required|max:255',
            'city' => 'max:255',
            'postalCode' => 'max:255',
            'province' => 'max:255',
            'village' => 'max:255',
            'district' => 'max:255',
            'createdBy' => 'integer',
            'updatedBy' => 'integer',
        ];
    }
}
