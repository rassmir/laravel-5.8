<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos=Contacto::all();
        return view('welcome',array(
            'contactos'=>$contactos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactos=new Contacto();
        $contactos->nombre=$request->input('nombre');
        $contactos->apellido=$request->input('apellido');
        $contactos->nacionalidad=$request->input('nacionalidad');
        $contactos->sexo=$request->input('sexo');
        $contactos->telefono=$request->input('telefono');
        $contactos->direccion=$request->input('direccion');
        //dd($contactos);
        $contactos->save();
        return redirect()->route('inicio')->with(array(
            'message'=>'Guardado Correctamente !!'
        ));


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
        //
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
        $contactos=Producto::find($id);
        $contactos->delete($id);
        return redirect()->route('contacto.index');
    }
}
