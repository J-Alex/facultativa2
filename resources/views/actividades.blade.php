@extends('layouts.app')
@section('content')
    <h1>SOY LA VISTA DE ACTIVIDADES</h1>
    <div class="panel panel-default">
            <div class="panel-heading text-center">Listado de Actividades</div>
                <div class="panel-body">
                    <div class="table-responsive">            
                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                            <tr class="active">
                                <th>Actividad</th>
                                <th>Finca</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($actividades as $actividad)
                            <tr>
                                <td> {{ $actividad['nombre'] }} </td>
                                <td> {{ $actividad['idfinca'] }} </td>
                                <td> <a href="/actividades/{{ $actividad ['id'] }}/edit">Editar</a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection