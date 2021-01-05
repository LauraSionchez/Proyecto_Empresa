<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Requests\employeesRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $empleados = Employee::with('family')->select('id','ci','first_name_1','last_name_1','fech_ingre' )->simplePaginate(10);
         //mdd($documentos);
        return view('employees.employees', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd();
        $documentos = Document::select('id','codigo')->get();
         //mdd($documentos);
        return view('employees.createemployees', compact('documentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(employeesRequest $request)
    {
        $request->ci=$request->type_doc.'-'.$request->ci;

            $employee = Employee::create(array_merge($request->only('first_name_1','first_name_2','last_name_1','last_name_2','sexo','fech_nac','fech_ingre','phone','email'), array('ci'=> $request->ci) )); 
 

            if ($employee->save()){

             return redirect()->route('Employee.index')->with('status', 'Empleado registrado con exito');

         } else {

            return redirect()->route('Employee.create');

         }
          
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $id)
    {
       //dd($id);
       $documentos = Document::select('id','codigo')->get();


       //dd($id);
        return view('employees.editemployees', compact('documentos', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(employeesRequest $request)
    {
        // $employee = Employee::find($request->id);
        
        $request->ci=$request->type_doc.'-'.$request->ci;
    
        $employee = Employee::find($request->id)->update(array_merge($request->only('first_name_1','first_name_2','last_name_1','last_name_2','sexo','fech_nac','fech_ingre','phone','email'), array('ci'=> $request->ci) )); 

             return redirect()->route('Employee.index')->with('status', 'Empleado Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $id)
    {
        //dd($id);
        $id->delete();

        return redirect()->route('Employee.index');
    }
}
