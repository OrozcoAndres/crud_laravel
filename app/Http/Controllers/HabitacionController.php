<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
use Illuminate\Support\Facades\Redirect;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

        $habitacion = Habitacion::orderBy('id_habitacion','DESC')->paginate(5);
        return view('habitacion.index',compact('habitacion')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habitacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $habitaciones=new Habitacion;
        $habitaciones->tipo_habitacion=$request->get('tipo_habitacion');
        $habitaciones->cantidad_habitacion=$request->get('cantidad_habitacion');
        $habitaciones->cantidad_personas=$request->get('cantidad_personas');
        $habitaciones->fecha_entrada=$request->get('fecha_entrada');
        $habitaciones->fecha_salida=$request->get('fecha_salida');
        $habitaciones->save();
        return Redirect::to('habitacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_habitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_habitacion)
    {
        $habitaciones=Habitacion::findOrFail($id_habitacion);
        return view("habitacion.edit",["habitacion"=>$habitaciones]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_habitacion)
    {
        $habitaciones=Habitacion::findOrFail($id_habitacion);
        $habitaciones->tipo_habitacion=$request->get('tipo_habitacion');
        $habitaciones->cantidad_habitacion=$request->get('cantidad_habitacion');
        $habitaciones->cantidad_personas=$request->get('cantidad_personas');
        $habitaciones->fecha_entrada=$request->get('fecha_entrada');
        $habitaciones->fecha_salida=$request->get('fecha_salida');
        $habitaciones->update();
        return Redirect::to('habitacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_habitacion)
    {
        $habitaciones=Habitacion::findOrFail($id_habitacion);
        $habitaciones->delete();
        return Redirect::to('habitacion');
    }
}
