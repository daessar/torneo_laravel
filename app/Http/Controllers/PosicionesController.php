<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosicionesController extends Controller
{
    //Simulando la bd con arrays
    private $posiciones = array(
        array(
            'id' => '1',
            'nombre' => 'Delantero',
        ),
        array(
            'id' => '2',
            'nombre' => 'Volante',
        ),
        array(
            'id' => '3',
            'nombre' => 'Defensa',
        ),
        array(
            'id' => '4',
            'nombre' => 'Lateral Derecho',
        ),
        
    );
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posiciones.index') -> with('posiciones', $this -> posiciones);;
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
    public function store(Request $request)
    {
        //
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
         return view('posiciones.edit') -> with('id', $id);
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
