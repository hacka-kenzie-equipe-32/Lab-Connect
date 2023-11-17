<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'sometimes',
            'email' => 'sometimes|email',
            'password' => 'sometimes|min:8|regex:/[a-zA-Z#$%^&*]/i',
            'birth_date' => 'sometimes|date',
            'cpf' => 'sometimes|numeric',
            'isActive' => 'sometimes',
            'user_type' => 'sometimes'
        ];
    }
}
