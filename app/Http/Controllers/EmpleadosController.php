<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;
use App\Models\tipo_documento;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados=Empleados::all();
        return view('Empleados.index')->with('empleados',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $tipo_documentos = tipo_documento::all();
        return view('Empleados.create', compact('tipo_documentos'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleados = new Empleados();
        $empleados->tipo_id = $request->get('tipo_id'); 
        $empleados->nombre = $request->get('nombre');
        $empleados->cedula = $request->get('cedula');
        $empleados->cargo = $request->get('cargo');
       

        $empleados->save();
        return redirect('/Empleados');
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
        $empleado=Empleados::find($id);
        return view('Empleados.edit')->with('empleados',$empleado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleado = Empleados::find($id);
        $empleado-> nombre = $request->get('nombre');
        $empleado-> cedula = $request->get('cedula');
        $empleado-> cargo = $request->get('cargo');
        
        
        
        $empleado->save();

        return redirect('/Empleados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleado = Empleados::find($id);
        $empleado-> delete('/Empleados');
        return redirect('/Empleados');
    }
}
