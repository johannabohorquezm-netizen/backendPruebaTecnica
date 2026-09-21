<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $userId = $this->route('user');

        return [
            'usuario' => [
                'required',
                'string',
                'max:50',
                Rule::unique('users', 'usuario')->ignore($userId),
            ],

            'email' => [
                'required',
                'email',
                'max:150',
                Rule::unique('users', 'email')->ignore($userId),
            ],

            'primerNombre' => [
                'required',
                'string',
                'max:100',
            ],

            'segundoNombre' => [
                'nullable',
                'string',
                'max:100',
            ],

            'primerApellido' => [
                'required',
                'string',
                'max:100',
            ],

            'segundoApellido' => [
                'nullable',
                'string',
                'max:100',
            ],

            'idDepartamento' => [
                'required',
                'integer',
                'exists:departamentos,id',
            ],

            'idCargo' => [
                'required',
                'integer',
                'exists:cargos,id',
            ],
        ];
    }
}