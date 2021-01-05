<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Document;
use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeesRequest extends FormRequest
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
   
    // dd($request->first_name_1);
        return [
            
           'type_doc'=> 'required|max:1',
            //'ci' => 'max:10',
           'type_doc_ci' => 'unique:employees,ci,'.$request->id,
            //'ci' => 'unique:employees,ci'. ($request->id!=null? ','.$request->id:'') ,
           'first_name_1' => 'required|max:40|alpha',
           'first_name_2' => 'required|max:40|alpha',
           'last_name_1' => 'required|max:40|alpha',
           'last_name_2' => 'required|max:40|alpha',
           'sexo' => 'required|max:1|alpha|in:F,M',
           'fech_nac' => 'required|date',
           'fech_ingre' => 'required|date',
           'phone' => 'required|max:15',
           'email' => 'required|unique:employees,email,'.$request->id,

        ];
    } 

    public function messages()
    {
        return [
            
            'type_doc.required'=> 'tipo de Docuento: requerido',
            'type_doc.max'=> 'tipo de Documento: Longitud de valores no admitida',
            'type_doc_ci.unique'=> 'cedula: ya existe',
            'first_name_1.required'=> 'Primer Nombre: Requerido',
            'first_name_1.max'=> 'Primer Nombre: Maximo 40 digitos',
            'first_name_1.alpha'=> 'Primer Nombre: solo Letras',
            'first_name_2.required'=> 'Segundo Nombre: Requerido',
            'first_name_2.max'=> 'Segundo Nombre: Maximo 40 digitos',
            'first_name_2.alpha'=> 'Segundo Nombre: solo Letras',
            'sexo.required' => 'Sexo: Requerido',
            'sexo.max'=> 'sexo: Maximo 40 digitos',
            'Sexo.alpha'=> 'Sexo: solo Letras',
            'Sexo.in'=> 'Sexo: Solo se permite F y M',
            'fech_nac.required' => 'Fecha de Naciomiento: Requerida', 
            'fech_ingre.required' => 'Fecha de Ingreso: Requerida',
            'phone.required' => 'Telefono: Requerido',
            'phone.max' => 'Telefono: Maximo 15 Digitos',
            'email.required' => 'Email: Requerido',
            'email.unique' => 'Correo: ya Existe',
        ];
    }
}
