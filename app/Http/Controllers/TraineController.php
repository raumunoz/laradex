<?php

namespace Laradex\Http\Controllers;
use Laradex\Trainer;
use Illuminate\Http\Request;

class TraineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'hola desde el controllador resouece';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //funcion en mostrar un formulario
        //vista dentro de la carpera traines 
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *esta funcion se manda llamar cuando se hace un 
     *POST desde un formulario a el controllere.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trainer=new Trainer();
        $trainer->name=$request->input('nombre');
        $trainer->save();
        return 'GUARDADO';
        //regresa todo el requestes
        //return $request->all();
        //regresa el el valor de la variable nombre despde el
        //el formulario
        //return $request->input('nombre');
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
        //
    }
}
