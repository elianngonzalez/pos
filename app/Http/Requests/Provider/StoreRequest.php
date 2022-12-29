<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'email'=>'required|email|string|max:200|unique:providers',
            'ruc_number'=>'required|string|max:12|unique:providers',
            'address'=>'nullable|required|string|max:250',
            'phone'=>'required|string|max:12|min:6|unique:providers',
        ];
    }

    public function messages(){
        
        return [
            'name.required'=> 'el campo es requerido',
            'name.string'=> 'el valor no es correcto',
            'name.max'=> 'solo se permiten 250 caracteres',

            'email.required'=> 'el campo es requerido',
            'email.string'=> 'el valor no es correcto',
            'email.max'=> 'solo se permiten 200 caracteres',
            
            'ruc_number.required'=> 'el campo es requerido',
            'ruc_number.string'=> 'el valor no es correcto',
            'ruc_number.max'=> 'solo se permiten 12 caracteres',
            
            'address.required'=> 'el campo es requerido',
            'address.string'=> 'el valor no es correcto',
            'address.max'=> 'solo se permiten 250 caracteres',
            
            'phone.required'=> 'el campo es requerido',
            'phone.string'=> 'el valor no es correcto',
            'phone.max'=> 'solo se permiten 12 caracteres',
         ];
        
    }
}
