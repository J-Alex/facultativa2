@extends('layouts.app')
@section('content')
    <h1>SOY LA VISTA DE ACTIVIDADES</h1>
    <ul>
        @foreach($actividades as $actividad)
        <li>
            {{ $actividad['nombre'] }}
        </li>
        <li>
            {{ $actividad['idfinca'] }}
        </li>
        @endforeach
    </ul>
@endsection