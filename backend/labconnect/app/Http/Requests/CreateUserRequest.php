<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|regex:/[a-zA-Z#$%^&*]/i',
            'birth_date' => 'required|date',
            'cpf' => 'required|numeric',
            'isActive' => 'sometimes',
            'user_type' => 'sometimes'
        ];
    }
}
