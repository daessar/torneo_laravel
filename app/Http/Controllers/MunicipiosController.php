<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
// Reglas de validación
use App\Http\Requests\StoreMunicipiosRequest;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #Trayendo los datos de bd
        $municipios = Municipio::all();
        return view('municipios.index') -> with('municipios', $municipios);
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
    public function store(StoreMunicipiosRequest $request)
    {

        //Inserción de datos
        $municipio = new Municipio();
        $municipio->nombre = $request->nombre;
        $municipio->save();
        return redirect()->route('municipios.index')->with('status', 'Municipio Creado');
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
        $municipio = Municipio::find($id);
        return view('municipios.edit') -> with('municipio', $municipio);
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
        $municipio = Municipio::find($id);
        $municipio->nombre = $request->nombre;
        $municipio->save();
        return redirect()->route('municipios.index')->with('status', 'Municipio Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $municipio = Municipio::find($id);
        $municipio->delete();
        return redirect()->route('municipios.index')->with('status', 'Municipio Eliminado');
    }
}
