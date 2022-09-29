@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Ingresa La Reserva De La Habitación</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>


</div> {!!Form::open(array('url'=>'habitacion','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group"> <label for="tipo_habitacion">Tipo De Habitación</label>
         <input type="text" name="tipo_habitacion" id="tipo_habitacion" class="form-control" placeholder="Digite el tipo de habitacion"> </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group"> <label for="cantidad_habitacion">Cantidad De Habitación</label>
            <input type="number" name="cantidad_habitacion" id="cantidad_habitacion" class="form-control" placeholder="Cantidad de habitaciones">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group"> <label for="cantidad_personas">Cantidad De Personas</label> <input type="number" name="cantidad_personas" id="cantidad_personas" class="form-control" placeholder="Cantidad de personas"> </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group"> <label for="fecha_entrada">Fecha Entrada</label> <input type="date" name="fecha_entrada" id="fecha_entrada" class="form-control" placeholder="Fecha de entrada"> </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group"> <label for="fecha_salida">Fecha Salida</label> <input type="date" name="fecha_salida" id="fecha_salida" class="form-control" placeholder="Fecha de Salida"> </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br> <button class="btn btn-primary" type="submit">
            <span class="glyphicon glyphicon-ok"></span> Guardar</button>
             <button class="btn btn-danger" type="reset">
                <span class="glyphicon glyphicon-remove">

                </span> Vaciar Campos</button> 
                <a class="btn btn-info" type="reset" href="{{url('habitacion')}}">
                    <span class="glyphicon glyphicon-home"></span> Regresar </a> </div>
    </div>
</div> {!!Form::close()!!} @endsection 
