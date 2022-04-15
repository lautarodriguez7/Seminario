<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->descripcion = $request->get('descripcion');
        $clientes->estado = $request->get('estado');
        $clientes->nombre = $request->get('nombre');
        $clientes->telefono = $request->get('telefono');
        $clientes->direccion = $request->get('direccion');
        $clientes->email = $request->get('email');
        $clientes->cuit = $request->get('cuit');
        $clientes->trabajo = $request->get('trabajo');

        $clientes->save();

        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientes = Cliente::find($id);
        $clientes->descripcion = $request->get('descripcion');
        $clientes->estado = $request->get('estado');
        $clientes->nombre = $request->get('nombre');
        $clientes->telefono = $request->get('telefono');
        $clientes->direccion = $request->get('direccion');
        $clientes->email = $request->get('email');
        $clientes->cuit = $request->get('cuit');
        $clientes->trabajo = $request->get('trabajo');
        $clientes->updated_at = $request->get('updated_at');


        $clientes->save();

        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = Cliente::find($id);
        $clientes->delete();
        return redirect('/clientes');
    }
}
