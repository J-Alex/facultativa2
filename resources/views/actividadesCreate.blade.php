@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center">Registrar Nueva Actividad</div>
        <div class="panel-body">
            <form class=""  action="{{ url('/actividades') }}" method="POST">
                {{ csrf_field() }}
                
                <div class="form-group col-md-6">
                    <label for="nombre" class="form-label">Nombre de la actividad: </label>
                    <input name="nombre" type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="idfinca" class="form-label">id finca: </label>
                    <select name="idfinca" id="" class="form-control">
                        @foreach($fincas as $finca)
                            <option value="{{ $finca['id'] }}">{{ $finca['nombre'] }}</option>
                        @endforeach
                    </select>
                    <!--<input name="idfinca" type="text" class="form-control">-->
                </div>
                <div class="form-group col-md-6">
                    <input type="submit" class="btn btn-default btn-primary">
                </div>
            </form>    
        </div>
    </div>    
@endsection