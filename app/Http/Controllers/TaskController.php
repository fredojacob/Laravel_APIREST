<?php

namespace App\Http\Controllers;

use App\Task;
use Auth;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // llamaamos al metodo task para que retorne todo los registros de la base de datos 
       // $tasks =  Task::all();
         $tasks = Task::paginate(3);
        //retornamos la vista ala cual le vamos a enviar los datos
        return view('task.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create');
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
            'description' => 'required|string'
            ]);
        // almacenamiento

        $task = new Task;
        // el name es el nombre de la base de datos podemos revisar en migraciones 
        $task->name = $request->name;
        $task->description = $request->description;
       // $task->user_id = Auth::user()->id;
        $task->save();
        //re direccion
        return 'se ha almacenado la tarea';  
        //return response()->json(['message'=> ['Server Stored']  ;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
       // $task = Task
       // dd($task);

       return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //dd($task);
        return view('task.edit', compact('task'));
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
      //  dd($request);
      $this->validate($request, [
        'name' => 'required|string',
        'description' => 'required|string'
        ]);
    // almacenamiento

    $task = new Task;
    // el name es el nombre de la base de datos podemos revisar en migraciones 
    $task->name = $request->name;
    $task->description = $request->description;
    $task->user_id = Auth::user()->id;
    $task->save();
    //re direccion
    return 'se ha almacenado la tarea';  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
