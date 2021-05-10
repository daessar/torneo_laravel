<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Models\Equipo;
use App\Models\Posicion;

class JugadoresController extends Controller
{
    //Simulando la bd con arrays
    private $jugadores = array(
        array(
            'foto' => 'https://www.coleka.com/media/item/201804/08/fifa-world-cup-russia-2018-radamel-falcao-garcia-colombia-646.jpg',
            'nombre' => 'Radamel Falcao',
            'posicion' => 'Delantero',
            'numero' => '9',
            'equipo' => 'Millonarios'
        ),
        array(
            'foto' => 'https://images-na.ssl-images-amazon.com/images/I/518FzVYzKsL.__AC_SY445_QL70_ML2_.jpg',
            'nombre' => 'James Rodriguez',
            'posicion' => 'Volante',
            'numero' => '10',
            'equipo' => 'Nacional'
        ),
        array(
            'foto' => 'https://thumbs.coleka.com/media/item/201807/20/fifa-world-cup-russia-2018-juan-quintero-colombia-649-u.webp',
            'nombre' => 'Juanfer Quintero',
            'posicion' => 'Volante',
            'numero' => '7',
            'equipo' => 'Once Caldas'
        ),
        array(
            'foto' => 'https://cloud10.todocoleccion.online/cromos-futbol/tc/2018/03/24/13/116165271_05_12.jpg',
            'nombre' => 'Juan Cuadrado',
            'posicion' => 'Lateral Derecho',
            'numero' => '11',
            'equipo' => 'America'
        ),
    );
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jugadores.index') -> with('jugadores', $this -> jugadores); //Enviando el controlador
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
    public function store(Request $request)
    {
        // VALIDACIONES
        $request->validate([
            'foto' => 'required|image',
            'nombre' => 'required',
            'posicion' => 'required',
            'numero' => 'required',
            'equipo' => 'required',
        ]);

        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $foto = time() . $file->getClientOriginalName();
            $file->move("image/jugadores",$foto);
        }
        //Inserción de datos
        $jugador = new Jugador();
        $jugador->foto = $foto;
        $jugador->nombre = $request->nombre;
        $jugador->posicion_id= $request->posicion;
        $jugador->numero = $request->numero;
        $jugador->equipo_id = $request->equipo;
        $jugador->save();
        return "Guardado";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('jugadores.show') -> with('id', $id)
       -> with('jugador', $this -> jugadores[$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('jugadores.edit') -> with('id', $id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
