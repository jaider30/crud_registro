<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registro;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::all();
        return view('registro.index')->with('registros',$registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registros = new registro();

        $registros->nombre = $request->get('nombre');
        $registros->apellido = $request->get('apellido');
        $registros->correo = $request->get('correo');
        $registros->contraseña = $request->get('contraseña');
        $registros->rol = $request->get('rol');
        $registros->save();

        return redirect('/registros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = Registro::find($id);
        return view('registro.edit')->with('registro',$registro);
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
        $registros = Registro::find($id);

        
        $registros->nombre = $request->get('nombre');
        $registros->apellido = $request->get('apellido');
        $registros->correo = $request->get('correo');
        $registros->contraseña = $request->get('contraseña');
        $registros->rol = $request->get('rol');

        $registros->save();

        return redirect('/registros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Registro::find($id);
        $registro->delete();
        return redirect('/registros');
    }
}
