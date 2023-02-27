<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos= Personas::all();
        return view('welcome',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)


    {
        //
       $personas= new Personas();
       $personas->usu_nombre = $request->post('usu_nombre');
       $personas->usu_telefono = $request->post('usu_telefono');
       $personas->usu_email = $request->post('usu_email');
       $personas->save();

       return redirect()->route("personas.index")->with('success','Usuario Agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personas $personas)
    {
        //
        return view("eliminar");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personas $personas)
    {
        //

        return view("editar");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personas $personas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personas $personas)
    {
        //
    }
}
