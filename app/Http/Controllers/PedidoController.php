<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedido.index')->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedido.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pedidos = new Pedido();
        $pedidos-> nombre = $request->get('nombre');
        $pedidos-> producto = $request->get('producto');
        $pedidos-> cantidad = $request->get('cantidad');
        $pedidos-> precio = $request->get('precio');
        $pedidos-> fecha = $request->get('fecha');
        
        $pedidos->save();

        return redirect('/pedidos');
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
    public function edit($id)
    {
        $pedido = Pedido::find($id);
        return view('pedido.editar')->with('pedido', $pedido);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pedido = Pedido::find($id);

        $pedido-> nombre = $request->get('nombre');
        $pedido-> producto = $request->get('producto');
        $pedido-> cantidad = $request->get('cantidad');
        $pedido-> precio = $request->get('precio');
        $pedido-> fecha = $request->get('fecha');
        
        $pedido->save();

        return redirect('/pedidos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pedido = Pedido::find($id);
        $pedido-> delete('/pedidos');
        return redirect('/pedidos');
    }
}
