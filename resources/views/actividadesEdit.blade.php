@extends('layouts.app')

@section('content')
        
        <div class="panel panel-default">
        <div class="panel-heading text-center">Actualizar Actividad</div>
        <div class="panel-body">
            @foreach($actividad as $activity)
            <form class=""  action='{{ url("/actividades/$activity->id") }}' method="POST">
                {{ csrf_field() }}
                <div class="form-group col-md-6">
                    <label for="nombre" class="form-label">Nombre de la actividad: </label>
                    <input name="nombre" type="text" class="form-control" value="{{ $activity ['nombre'] }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="finca" class="form-label">Finca: </label>
                    <select name="finca" class="form-control">
                        <option value="{{ $activity ['idfinca'] }}">{{ $activity ['nombreFinca'] }}</option>
                        @foreach($fincas as $finca)
                        <option value="{{ $finca['id'] }}">{{$finca['nombre']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <input type="submit" class="btn btn-default btn-primary" value="Actualizar">
                </div>
            </form>
            @endforeach
        </div>
        </div>
    </div>
        
        
    
@endsection