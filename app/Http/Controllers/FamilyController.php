<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Employee;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Requests\FamilyRequest;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familys = Family::select('id','ci','first_name_1','last_name_1','fech_nac' )->simplePaginate(10);
         //mdd($documentos);
        return view('familys.familiar', compact('familys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Family $id)
    {
        $documentos = Document::select('id','codigo' );
         //mdd($documentos);
        return view('familys.crearfamiliar', compact('documentos', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FamilyRequest $request)
    {
        $request->ci=$request->type_doc.'-'.$request->ci;

            $familia = CFamily::create(array_merge($request->only('first_name_1','first_name_2','last_name_1','last_name_2','sexo','fech_nac','phone','parent'), array('ci'=> $request->ci) )); 
 

            if ($familia->save()){

             return redirect()->route('Family.index')->with('status', 'Familiar registrado con exito');

         } else {

            return redirect()->route('Family.create');

         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function show(Family $family)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function edit(Family $id)
    {
        $documentos = Document::select('id','codigo')->get();
        return view('employees.editemployees', compact('documentos', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function update(FamilyRequest $request)
    {
        $request->ci=$request->type_doc.'-'.$request->ci;

            $familia = CFamily::update(array_merge($request->only('first_name_1','first_name_2','last_name_1','last_name_2','sexo','fech_nac','fech_ingre','phone','email'), array('ci'=> $request->ci) )); 

          
           if ($familia->save()){

             return redirect()->route('Family.index')->with('status', 'Empleado Actualizado con exito');

         } else {

            return redirect()->route('Family.edit');

         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function destroy(Family $id)
    {
        $id->delete();

        return redirect()->route('Family.index');
    }
}
