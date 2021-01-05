<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Document;
use Illuminate\Http\Request;

class TypeDocumentRequest extends FormRequest
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
     * @return array
     */
    public function rules(Request $request)
    {
      
     //dd($request->all());
        return [
            
          'codigo' => 'required|max:3|unique:documents,codigo,'.$request->id,
          'name' => 'required|max:15',
          'description' => 'required|max:100'

        ];
    }


    public function messages ()
    {

         return [

          'codigo.required' => 'El Codigo o nomeclatura es Obligatorio',
          'codigo.max' => 'El Codigo o nomeclatura debe ser maximo 3 digitos',
          'codigo.unique' => 'El codigo o nomeclatura ya existe',
          'name.required' => 'El nombre es Requerido',
          'name.max' => 'El nombre debe ser de maximo 15 Caracteres',
          'description.max' => 'La descripcion no debe exceder de 40 caracteres'

         ];


    }






}
