@extends('layouts.app')

@section('content')
    @foreach($finca as $farm)
        {{ $farm ['nombre'] }}
    @endforeach
@endsection