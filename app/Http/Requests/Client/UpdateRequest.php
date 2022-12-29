<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
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
                'name'=>'required|string|max:250',
                'dni'=>'required|string|unique:clients,dni,'.$this->route('client')->id.'|max:8',
                'ruc'=>'required|string|unique:clients,ruc,'.$this->route('client')->id.'|max:12',
                'address'=>'nullable|required|string|max:250',
                'phone'=>'required|string|min:6|unique:clients,phone,'.$this->route('client')->id.'|max:12',
                'email'=>'required|email|string|email:rfc,dns|unique:clients,email,'.$this->route('client')->id.'|max:200',

        ];
    }


     public function messages(){
        
        return [
            'name.required'=> 'el campo es requerido',
            'name.string'=> 'el valor no es correcto',
            'name.max'=> 'solo se permiten 250 caracteres',

            'email.required'=> 'el campo es requerido',
            'email.string'=> 'el valor no es correct',
            'email.max'=> 'solo se permiten 200 caracteres',
            'email.unique'=> 'El email ya existe como cliente',

            
            'ruc.required'=> 'el campo es requerido',
            'ruc.string'=> 'el valor no es correcto',
            'ruc.max'=> 'solo se permiten 12 caracteres',
            
            'address.required'=> 'el campo es requerido',
            'address.string'=> 'el valor no es correcto',
            'address.max'=> 'solo se permiten 250 caracteres',
            
            'phone.required'=> 'el campo es requerido',
            'phone.string'=> 'el valor no es correcto',
            'phone.max'=> 'solo se permiten 12 caracteres',
         
            'dni.required'=> 'el campo es requerido',
            'dni.string'=> 'el valor no es correcto',
            'dni.max'=> 'solo se permiten 8 caracteres',
        
         ];
        
    }
}
