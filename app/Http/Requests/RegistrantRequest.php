<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrantRequest extends FormRequest
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
            'code' => 'required|max:255',
            'peopleId' => 'required|exists:people,id',
            'year' => 'required|integer',
            'phase' => 'required|integer',
            'donation' => 'integer',
            'admitted' => 'boolean',
            'admittedDate' => 'date',
            'status' => 'max:255',
            'route' => 'max:255',
            'type' => 'max:255',
            'registrationDueDate' => 'date',
            'referalId' => 'integer',
            'source' => 'max:255',
            'eagerProceed' => 'integer',
            'virtualAccount' => 'max:255',
            'isAlumniSibling' => 'boolean',
            'isPartisipantTraining' => 'boolean',
            'pu' => 'integer',
            'isPmdk' => 'boolean',
        ];
    }
}
