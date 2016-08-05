@extends('layouts.app')

@section('content')
    @foreach($trabajador as $worker)
        <form action='{{ url("/trabajadores/$worker->id ") }}' method="POST">
            
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="nombres" class="control-label">Nombres: </label>
                <input name="nombres" type="text" class="form-control" value="{{ $worker ['nombres'] }}">
            </div>
            <div class="form-group">
                <label for="apellidos" class="control-label">Apellidos: </label>
                <input name="apellidos" type="text" class="form-control" value="{{ $worker ['apellidos'] }}">
            </div>
            <div class="form-group">
                <label for="inss" class="control-label">INSS: </label>
                <input name="inss" type="text" class="form-control" value="{{ $worker ['inss'] }}">
            </div>
            <div class="form-group">
                <label for="civil" class="control-label">Civil: </label>
                <input name="civil" type="text" class="form-control" value="{{ $worker ['civil'] }}">
            </div>
            <div class="form-group">
                <label for="telefono" class="control-label">Teléfono: </label>
                <input name="telefono" type="text" class="form-control" value="{{ $worker ['telefono'] }}">
            </div>
            <div class="form-group">
                <label for="cedula" class="control-label">Cédula: </label>
                <input name="cedula" type="text" class="form-control" value="{{ $worker ['cedula'] }}">
            </div>
            <div class="form-group">
                <label for="tipo" class="control-label">Tipo: </label>
                <select name="tipo" class="form-control">
                    <option value="{{ $worker ['tipo'] }}" selected>{{ $worker ['tipo'] }}</option>
                    <option value="quincenal">Quincenal</option>
                    <option value="catorcenal">Catorcenal</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cargo" class="control-label">Cargo: </label>
                <input name="cargo" type="text" class="form-control" value="{{ $worker ['cargo'] }}">
            </div>
            <div class="form-group">
                <label for="genero" class="control-label">Género: </label>
                <input name="genero" type="text" class="form-control" value="{{ $worker ['genero'] }}">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default btn-primary" value="Actualizar">
                <!--<button type="submit" class="btn btn-default">Submit</button>-->
            </div>
        </form>
    @endforeach
@endsection