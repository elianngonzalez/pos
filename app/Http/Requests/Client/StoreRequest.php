<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *       name',
            'dni',
            'ruc',
            'address',
            'phone',
            'email',
            |email:rfc,dns
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:250',
            'dni' => 'required|max:8|unique:clients',
            'ruc' => 'nullable|string|max:12|unique:clients',
            'address' => 'nullable|string|max:250',
            'phone' => 'nullable|string|max:12|min:6|unique:clients',
            'email' => 'nullable|email|string|max:200|unique:clients',

        ];
    }

    public function messages()
    {

        return [
            'name.required' => 'el campo nombre es requerido',
            'name.string' => 'el valor en nombre no es correcto',
            'name.max' => 'solo se permiten 250 caracteres para el nombre',

            'email.required' => 'el campo email es requerido',
            'email.string' => 'el valor en email no es correcto',
            'email.max' => 'solo se permiten 200 caracteres para el email',
            'email.unique' => 'El email ya existe como cliente',

            'ruc.required' => 'el campo cuit es requerido',
            'ruc.string' => 'el valor de cuit no es correcto',
            'ruc.max' => 'solo se permiten 12 caracteres para el cuit',

            'address.required' => 'el campo direccion es requerido',
            'address.string' => 'el valor direccion no es correcto',
            'address.max' => 'solo se permiten 250 caracteres para la direccion',

            'phone.required' => 'el campo telefono es requerido',
            'phone.string' => 'el valor telefono no es correcto',
            'phone.max' => 'solo se permiten 12 caracteres para el telefono',

            'dni.required' => 'el campo dni es requerido',
            'dni.string' => 'el valor dni no es correcto',
            'dni.max' => 'solo se permiten 8 caracteres para el dni',

        ];
    }
}
