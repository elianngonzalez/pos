<?php

namespace App\Http\Requests\Provider;

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
            'email'=>'required|email|string|unique:providers,email,'.$this->route('provider')->id.'|max:200',
            'ruc_number'=>'required|string|unique:providers,ruc_number,'.$this->route('provider')->id.'|max:12',
            'address'=>'nullable|required|string|max:50',
            'phone'=>'required|string|min:6|unique:providers,phone,'.$this->route('provider')->id.'|max:12',
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
            
            'ruc_number.required'=> 'el campo es requerido',
            'ruc_number.string'=> 'el valor no es correcto',
            'ruc_number.max'=> 'solo se permiten 12 caracteres',
            
            'address.required'=> 'el campo es requerido',
            'address.string'=> 'el valor no es correcto',
            'address.max'=> 'solo se permiten 50 caracteres',
            
            'phone.required'=> 'el campo es requerido',
            'phone.string'=> 'el valor no es correcto',
            'phone.max'=> 'solo se permiten 12 caracteres',
         ];
        
    }
}
