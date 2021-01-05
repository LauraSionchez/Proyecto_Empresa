<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Requests\TypeDocumentRequest;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $docs = Document::select('id','codigo','name','description')->simplePaginate(10);
         // $dots =  Document::table('document')->paginate(10);
         //mdd($documentos);
        return view('documents.document', compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('documents.creardocument');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeDocumentRequest $request)
    {
         $data = new Document();
        $data->codigo = $request->codigo;
        $data->name = $request->name;
        $data->description = $request->description;
        

         if ($data->save()){

              return redirect()->route('Document.index')->with('status', 'Tipo de Documento registrado con exito');

         } else {

            return redirect()->route('Document.create');

         }
          
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $id)
    {
        //dd($document);
        //$docs = Document::find($id)->get();
       
        return view('documents.editdocument', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    
    public function update(TypeDocumentRequest $request)
    {
           // dd($request->all());
        
         $Document = Document::find($request->id);

         $Document->codigo = $request->codigo;
         $Document->name = $request->name;
         $Document->description = $request->description;


          if ($Document->save()){

              return redirect()->route('Document.index')->with('status', 'Tipo de Documento Actualizado con exito');

         } else {

            return redirect()->route('Document.edit');

         }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $id)
    {
        $id->delete();

        return redirect()->route('Document.index');
    }
}
