<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Oficina;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Oficina $oficina)
    {
        return view('empleados.create', compact('oficina'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Oficina $oficina)
    {
        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'dni' => [
                'required',
                'unique:empleados,dni',
                'regex:/^[0-9]{8}[A-Za-z]$/',
            ],
            'email' => 'required|email|unique:empleados,email',
        ]);

        $oficina->empleados()->create($request->all());
        return redirect()->route('oficinas.show', $oficina);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Oficina $oficina, Empleado $empleado)
    {
        return view('empleados.edit', compact('oficina', 'empleado'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oficina $oficina, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            // Los campos 'dni' y 'email' no se validan porque no se pueden modificar
        ]);

        $empleado->update($request->only(['nombre', 'primer_apellido', 'segundo_apellido', 'rol', 'fecha_nacimiento']));

        return redirect()->route('oficinas.show', $oficina);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
