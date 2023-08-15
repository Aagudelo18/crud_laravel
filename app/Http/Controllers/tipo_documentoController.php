<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_documento;


class tipo_documentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipo_documento =tipo_documento::all();
        
        return view('tipo_documento.index')->with('tipo_documento',$tipo_documento);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipo_documento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipo_documento = new tipo_documento();
        $tipo_documento->id = $request->get('id');
        $tipo_documento->nombre_tipo = $request->get('nombre_Tipo');
       
        $tipo_documento->save();
        return redirect('/tipo_documento');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipo_documento = tipo_documento::find($id);
        return view('tipo_documento.edit')->with('tipo_documento', $tipo_documento);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipo_documento = tipo_documento::find($id);

        $tipo_documento-> nombre_Tipo = $request->get('nombre_Tipo');
        
        
        $tipo_documento->save();

        return redirect('/tipo_documento');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipo_documento = tipo_documento::find($id);
        $tipo_documento-> delete('/tipo_documento');
        return redirect('/tipo_documento');
}
}