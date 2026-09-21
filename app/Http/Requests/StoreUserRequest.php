<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'usuario' => [
                'required',
                'string',
                'max:50',
                'unique:users,usuario',
            ],

            'email' => [
                'required',
                'email',
                'max:150',
                'unique:users,email',
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