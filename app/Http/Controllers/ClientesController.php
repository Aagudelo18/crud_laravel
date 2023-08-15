<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\tipo_documento;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes=clientes::all();
        return view('clientes.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $tipo_documentos = tipo_documento::all();
        return view('clientes.create', compact('tipo_documentos'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = new clientes();
        $clientes->tipo_id = $request->get('tipo_id'); 
        $clientes->nombre = $request->get('nombre');
        $clientes->direccion = $request->get('direccion');
        $clientes->telefono = $request->get('telefono');
        $clientes->No_Documento = $request->get('No_Documento');
       

        $clientes->save();
        return redirect('/clientes');
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
        $tipo_documentos = tipo_documento::find($id);
        $clientes=clientes::find($id);
        return view('clientes.edit')->with('clientes',$clientes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $clientes = new clientes();
        
        $clientes->nombre = $request->get('nombre');
        $clientes->direccion = $request->get('direccion');
        $clientes->telefono = $request->get('telefono');
        $clientes->No_Documento = $request->get('No_Documento');
       

        $clientes->save();
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clientes = clientes::find($id);
        $clientes-> delete('/clientes');
        return redirect('/clientes');
    }
}
