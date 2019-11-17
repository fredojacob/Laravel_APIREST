<?php

namespace App\Http\Controllers;

use App\helpdesk;
use Illuminate\Http\Request;

class HelpdeskController extends Controller
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
        return view('helpdesk.create');
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
            'status' => 'required|string',
            'company' => 'required|string',
            'description' => 'required|string',
            'note' => 'required|string'
            ]);
        // almacenamiento

        $helpdesk = new helpdesk;
        // el name es el nombre de la base de datos podemos revisar en migraciones 
        $helpdesk->name = $request->name;
        $helpdesk->description = $request->description;
        $helpdesk->status = $request->status;
        $helpdesk->company = $request->company;
        $helpdesk->note = $request->note;
       // $task->user_id = Auth::user()->id;
        $helpdesk->save();
        //re direccion
        return view('presentacion');  
        //return response()->json(['message'=> ['Server Stored']  ;

    }











    /**
     * Display the specified resource.
     *
     * @param  \App\helpdesk  $helpdesk
     * @return \Illuminate\Http\Response
     */
    public function show(helpdesk $helpdesk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\helpdesk  $helpdesk
     * @return \Illuminate\Http\Response
     */
    public function edit(helpdesk $helpdesk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\helpdesk  $helpdesk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, helpdesk $helpdesk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\helpdesk  $helpdesk
     * @return \Illuminate\Http\Response
     */
    public function destroy(helpdesk $helpdesk)
    {
        //
    }
}
