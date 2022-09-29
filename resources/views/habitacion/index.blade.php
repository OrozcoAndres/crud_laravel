@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-9">
        <a href="{{url('habitacion/create')}}" class="pull-right">
            <button class="btn btn-success">Crear Habitación</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
        <th>Id Habitación</th>
        <th>Tipo de Habitación</th>
        <th>Cantidad de Habitación</th>
        <th>Cantidad de Personas</th>
        <th>Fecha Entrada</th>
        <th>Fecha Salida</th>
        <th>Opciones</th>
    </thead>
    
    <tbody>
        @foreach($habitacion as $per)
        <tr>
            <td>{{ $per->id_habitacion }}</td>
            <td>{{ $per->tipo_habitacion}}</td>
            <td>{{ $per->cantidad_habitacion}}</td>
            <td>{{ $per->cantidad_personas}}</td>
            <td>{{ $per->fecha_entrada }}</td>
            <td>{{ $per->fecha_salida }}</td>
            <td>
        <a href="{{URL::action('App\http\Controllers\HabitacionController@edit',$per->id_habitacion)}}">
            <button class="btn btn-primary">Actualizar</button></a>
        <a href=""data-target="#modal-delete-{{$per->id_habitacion}}"data-toggle="modal">
            <button class="btn btn-danger">Eliminar</button></a>
        </td>
    </tr>
    @include('habitacion.modal')
    @endforeach</tbody>
</table>
</div>
</div>
</div>
@endsection