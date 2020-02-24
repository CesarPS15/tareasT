<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //tareas = consultar tareas de tabla de tareas
            return view('tareas.tareaIndex');//->with(['tarea' =>$tarea]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tareas.tareaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //Insertar en DB
      return redirect('tarea');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        return view('tareas.tareaShow');//->with(['tarea' =>$tarea]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        //
    }
}
