@extends('layouts.app')
@section('content')
    <h1>trabajadores</h1>
    <!--@foreach($trabajadores as $trabajador)
        {{ $trabajador ['nombres'] }}
        {{ $trabajador->nombres }}
    @endforeach-->
    
    <div class="table-responsive">            
            <table class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                    <tr class="active">
                        <th>#</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Inss</th>
                        <th>Civil</th>
                        <th>Teléfono</th>
                        <th>Cédula</th>
                        <th>Tipo</th>
                        <th>Cargo</th>
                        <th>Género</th>
                        <th>Alta</th>
                        <th>Pic</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($trabajadores as $trabajador)
                    <tr class="success">
                        <td>{{ $trabajador ['id'] }}</td>
                        <td>{{ $trabajador ['nombres'] }}</td>
                        <td>{{ $trabajador ['apellidos'] }}</td>
                        <td>{{ $trabajador ['inss'] }}</td>
                        <td>{{ $trabajador ['civil'] }}</td>
                        <td>{{ $trabajador ['telefono'] }}</td>
                        <td>{{ $trabajador ['cedula'] }}</td>
                        <td>{{ $trabajador ['tipo'] }}</td>
                        <td>{{ $trabajador ['cargo'] }}</td>
                        <td>{{ $trabajador ['genero'] }}</td>
                        <td>{{ $trabajador ['created_at'] }}</td>
                        <td><img width="200px" height="75px" src="{{$trabajador['foto']}}"></img></td>
                        <td><a href="/trabajadores/{{ $trabajador ['id'] }}/edit">Editar</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div> 
    
    
    
@endsection