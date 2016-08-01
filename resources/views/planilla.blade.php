@extends('layouts.app')

@section('content')
    <h1>PLANILLA</h1>
    <ul>
        @foreach($quinceT as $tquince)
            <li>{{ $tquince['nombres'] }}</li>
            <li>{{ $tquince->apellidos }}</li>
        @endforeach
    </ul>
@endsection