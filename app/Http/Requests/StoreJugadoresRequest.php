<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJugadoresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'foto' => 'required|image',
            'nombre' => 'required',
            'posicion' => 'required',
            'numero' => 'required',
            'equipo' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'foto.required' => 'La foto es obligatoria',
            'foto.image' => 'La foto escudo debe ser una imagen',
            'nombre.required' => 'El nombre es obligatorio',
            'posicion.required' => 'La posición es obligatoria',
            'numero.required' => 'El numero es obligatorio',
            'equipo.required' => 'El equipo es obligatorio'
        ];
    }
}
