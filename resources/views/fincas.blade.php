@extends('layouts.app')
@section('content')
    <h1>SOY LA VISTA DE FINCAS</h1>
    <ul>
        @foreach($fincas as $finca)
        <li>
            {{ $finca['nombre'] }}
        </li>
        @endforeach
    </ul>
@endsection