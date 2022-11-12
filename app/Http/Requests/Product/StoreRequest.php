<?php

namespace App\Http\Requests\Product;

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
            'name'=>'required|string|unique:products|max:250',
            'sell_price'=>'required|',
            'category_id'=>'required|integer|exists:categories,id',
            'provider_id'=>'required|integer|exists:providers,id',
        ];
    }
    public function messages(){
        
        return [
            'name.required'=> 'el campo es requerido',
            'name.string'=> 'el valor no es correcto',
            'name.max'=> 'solo se permiten 50 caracteres',

            'image.required' => 'el campo es requerido',
            'image.dimensions' => 'solo se permiten imagenes de 100x200',

            'sell_price.required'=> 'el campo es requerido',
        
            'category_id.required'=> 'el campo es requerido',
            'category_id.integer'=> 'el valor no es correcto',
            'category_id.exists'=> 'la categoria no existe',

            'provider_id.required'=> 'el campo es requerido',
            'provider_id.integer'=> 'el valor no es correcto',
            'provider_id.exists'=> 'el proveedor no existe',

         ];
        
    }
}
