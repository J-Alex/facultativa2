@extends('layouts.app')
@section('content')
    <h1>SOY LA VISTA DE FINCAS</h1>
        <div class="panel panel-default">
            <div class="panel-heading text-center">Listado de Fincas</div>
                <div class="panel-body">
                    <div class="table-responsive">            
                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                            <tr class="active">
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fincas as $finca)
                            <tr>
                                <td> {{ $finca['id'] }} </td>
                                <td> {{ $finca['nombre'] }} </td>
                                <td> <a href="/fincas/{{ $finca ['id'] }}/edit">Editar</a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection