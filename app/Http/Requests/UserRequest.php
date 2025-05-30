<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|',
            'password' => 'required|min:6'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Nome é obrigatorio',
            'email.required' => 'Email é obrigatorio',
            'email.email' => 'Email precisa ser valido',
            'email.unique' => 'Email já cadastrado',
            'password.required' => 'Senha é obrigatorio',
            'password.min' => 'Senha precisa ter no minimo 6 caracteres'
        ];
    }
}
