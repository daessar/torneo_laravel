<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipiosController extends Controller
{
    //Simulando la bd con arrays
    private $municipios = array(
        array(
            'id' => '1',
            'nombre' => 'Manizales',
        ),
        array(
            'id' => '2',
            'nombre' => 'Medellin',
        ),
        array(
            'id' => '3',
            'nombre' => 'Bogotá',
        ),
        array(
            'id' => '4',
            'nombre' => 'Cali',
        ),
        
    );
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('municipios.index') -> with('municipios', $this -> municipios);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('municipios.create');
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
        $request->validate(['nombre' => 'required']);

        //Inserción de datos
        $municipio = new Municipio();
        $municipio->nombre = $request->nombre;
        $municipio->save();
        return ('Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('municipios.show')->with('id', $id)
        ->with('municipio', $this->municipios[$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('municipios.edit') -> with('id', $id);
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
