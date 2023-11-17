<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAddressRequest extends FormRequest
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
            'street' => 'sometimes',
            'number' => 'sometimes|numeric',
            'complement' => 'sometimes',
            'zip_code' => 'sometimes',
            'city' => 'sometimes',
            'state' => 'sometimes',
            'country' => 'sometimes'
        ];
    }
}
