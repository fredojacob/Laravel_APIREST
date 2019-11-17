<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
             
                    // dd($request);
        //validacion de datos que el usuario introduce  primer paso 
        $this->validate($request, [
            'name' => 'required|string',
            'second_name' => 'required|string',
            'company' => 'required|string',
            'age' => 'required|string',
            'mail' => 'required|string',
            'puesto' => 'required|string',
            ]);
        // almacenamiento

        $cliente = new cliente;
        // el name es el nombre de la base de datos podemos revisar en migraciones 
        $cliente->name = $request->name;
        $cliente->second_name = $request->second_name;
        $cliente->company = $request->company;
        $cliente->age = $request->age;
        $cliente->mail = $request->mail;
        $cliente->puesto= $request->puesto;
       // $task->user_id = Auth::user()->id;
        $cliente->save();
        //re direccion
        return view('cliente.create');  
        //return response()->json(['message'=> ['Server Stored']  ;



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
