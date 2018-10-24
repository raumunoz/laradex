<?php

namespace Laradex\Http\Controllers;
use Laradex\Trainer;
use Illuminate\Http\Request;
use Laradex\Http\Requests\StoreTrainerRequest;
class TraineController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //aqui mostramos los datos de la base de datos.
    public function index()
    {
        /**
         * trae todos los datos registrados
         * el modelo trainer regresa los datos de la 
         * base de datos
         */
        $trainers=Trainer::all();
        //compact genera un arreglo
        return view('trainers.index',compact('trainers'));
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
    //se usa el custom request que acabamos de encontar
    public function store(StoreTrainerRequest $request)
    {
        //regresa todo el requestes
        //return $request->all();
        //regresa el el valor de la variable nombre despde el
        //el formulario
        //return $request->input('nombre');
        //return $request;
        # code...
        if ($request->hasFile('avatar')) {
            $file=$request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }
        $trainer=new Trainer();
        $trainer->name=$request->input('nombre');
        $trainer->avatar=$name;
        $trainer->slug=$name;
        $trainer->descripcion=$request->input('descripcion');
        $trainer->save();
        return 'GUARDADO';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //esta funcion es llamada cuando usamos el id de un elemnto
    public function show(Trainer $trainer)
    {
        //
        //return "retornar elemento con id ".$id;
        //cuatro puntos para acceder metodos de modelos;
        //$trainer=Trainer::find($id);
        //return $trainer;
        //return view('trainers.index',compact('trainers'));
        //$trainer =Trainer::where ('slug','=', $slug)->firstOrFail();
        return view('trainers.show',compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        //
        return view('trainers.edit',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        //
        $trainer->fill($request->except('avatar'));

        if ($request->hasFile('avatar')) {
            $file=$request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $trainer->avatar=$name;
            $trainer->slug=$name;
            $file->move(public_path().'/images/',$name);

        }
        $trainer->save();
        return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //para destruirss
    public function destroy(Trainer $trainer)
    {
        //
    }
}
