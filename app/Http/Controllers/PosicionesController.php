<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posicion;
// Reglas de validación
use App\Http\Requests\StorePosicionesRequest;

class PosicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #Trayendo los datos de bd
        $posiciones = Posicion::all();
        return view('posiciones.index') -> with('posiciones', $posiciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posiciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePosicionesRequest $request)
    {
        //Inserción de datos
        $municipio = new Posicion();
        $municipio->nombre = $request->nombre;
        $municipio->save();
        return redirect()->route('posiciones.index')->with('status', 'Posición Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posiciones.show')->with('id', $id)
        ->with('posicion', $this->posiciones[$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posicion = Posicion::find($id);
         return view('posiciones.edit') -> with('posicion', $posicion);
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
        $posicion = Posicion::find($id);
        $posicion->nombre = $request->nombre;
        $posicion->save();
        return redirect()->route('posiciones.index')->with('status', 'Posicion Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posicion = Posicion::find($id);
        $posicion->delete();
        return redirect()->route('posiciones.index')->with('status', 'Posicion Eliminada');
    }
}
