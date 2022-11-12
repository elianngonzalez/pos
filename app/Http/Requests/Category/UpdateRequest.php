<?php

namespace App\Http\Requests\Category;

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
            'name'=>'required|string|max:50',
            'description'=>'nullable|string|max:250'
        ];
    }

    public function messages(){
        
        return [
            'name.required'=> 'el campo es requerido',
            'name.string'=> 'el valor no es correcto',
            'name.max'=> 'solo se permiten 50 caracteres',
            'description.required'=> 'el campo es requerido',
            'description.string'=> 'el valor no es correct',
           ' description.max'=> 'solo se permiten 250 caracteres',
         ];
        
    }

}
