<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Equipo;

class EquiposController extends Controller
{
    //Simulando la bd con arrays
    private $equipos = array(
        array(
            'nombre' => 'Once Caldas',
            'dt' => 'D.T. Juan Carlos',
            'municipio' => 'Manizales',
            'escudo' => 'https://2.bp.blogspot.com/-c8cVVfy0lkw/UEU6ro0f2jI/AAAAAAAABlc/91vEI3AQ-Ww/s1600/Once+Caldas+%2528Colombia%2529.jpg'
        ),
        array(
            'nombre' => 'America',
            'dt' => 'D.T. Camilo Perez',
            'municipio' => 'Cali',
            'escudo' => 'https://i.pinimg.com/736x/a1/a5/a3/a1a5a397fdd07e7ad02f2b5edcdd8805.jpg'
        ),
        array(
            'nombre' => 'Nacional',
            'dt' => 'D.T. Gonzado Millan',
            'municipio' => 'Medellin',
            'escudo' => 'https://logoeps.com/wp-content/uploads/2012/11/atletico-nacional-logo-vector.png'
        ),
        array(
            'nombre' => 'Millonarios',
            'dt' => 'D.T. Ramiro Cardenas',
            'municipio' => 'Bogota',
            'escudo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Escudo_de_Millonarios_F%C3%BAtbol_Club.svg/1200px-Escudo_de_Millonarios_F%C3%BAtbol_Club.svg.png'
        ),
    );
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('equipos.index') -> with('equipos', $this -> equipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipio::all();
        return view('equipos.create')->with('municipios',$municipios);
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
            'nombre' => 'required',
            'dt' => 'required',
            'municipio' => 'required',
            'escudo' => 'required|image'
        ]);

        if($request->hasFile('escudo')){
            $file = $request->file('escudo');
            $escudo = time() . $file->getClientOriginalName();
            $file->move("image/equipos",$escudo);
        }
        //Inserción de datos
        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->dt = $request->dt;
        $equipo->municipio_id = $request->municipio;
        $equipo->escudo = $escudo;
        $equipo->save();
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
        return view('equipos.show')->with('id', $id)
        ->with('equipo', $this->equipos[$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('equipos.edit') -> with('id', $id);
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
