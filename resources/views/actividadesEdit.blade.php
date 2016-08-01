@extends('layouts.app')

@section('content')
    @foreach($actividad as $activity)
        {{ $activity ['nombre'] }}
    @endforeach
@endsection