<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'require',
            'email' => 'require|email',
            'password' => 'require|min:8|regex:/[a-zA-Z#$%^&*]/i',
            'birth_date' => 'require|date',
            'cpf' => 'require|numeric|min:11|max:11',
            'address' => 'require',
            'user_type' => 'sometimes'
        ];
    }
}
