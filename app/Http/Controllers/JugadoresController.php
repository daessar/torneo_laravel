<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Models\Equipo;
use App\Models\Posicion;
use App\Models\Municipio;
// Reglas de validación
use App\Http\Requests\StoreJugadoresRequest;
//Eliminar archivo
use Illuminate\Support\Facades\file;

class JugadoresController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores.index') -> with('jugadores', $jugadores); //Enviando el controlador
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipo::all();
        $posiciones = Posicion::all();
        return view('jugadores.create')->with('equipos', $equipos)->with('posiciones', $posiciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJugadoresRequest $request)
    {
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $foto = time() . $file->getClientOriginalName();
            $file->move("image/jugadores",$foto);
        }
        //Inserción de datos
        $jugador = new Jugador();
        $jugador->foto = $foto;
        $jugador->nombre = $request->nombre;
        $jugador->posicion_id = $request->posicion;
        $jugador->numero = $request->numero;
        $jugador->equipo_id = $request->equipo;
        $jugador->save();
        return redirect()->route('jugadores.index')->with('status', 'Jugador Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jugadores = Jugador::find($id);
        return view('jugadores.show') -> with('id', $id)
       -> with('jugador', $jugadores);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jugador = Jugador::find($id);
        $equipo = Equipo::all();
        $municipios = Municipio::all();
        $posicion = Posicion::all();
        return view('jugadores.edit') -> with('jugador', $jugador) -> with('municipios',$municipios) -> with('equipo', $equipo) -> with('posicion', $posicion);
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
        $jugador = Jugador::find($id);
        $jugador->nombre = $request->nombre;
        $jugador->posicion_id = $request->posicion;
        $jugador->numero = $request->numero;
        $jugador->equipo_id = $request->equipo;
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $foto = time() . $file->getClientOriginalName();
            $file->move("image/jugadores",$foto);
        }
        $jugador->save();
        return redirect()->route('jugadores.index')->with('status', 'Jugador Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jugador = Jugador::find($id);
        $jugador->delete();
        File::delete('image/jugadores/' . $jugador->foto);
        return redirect()->route('jugadores.index')->with('status', 'Jugador Eliminado');
    }
}
