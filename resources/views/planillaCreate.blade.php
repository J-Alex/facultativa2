@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center">Registro de Planilla</div>
        <div class="panel-body">
            <form class=""  action="{{ url('/planilla') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group col-md-4">
                    <label for="id_finca" class="form-label">Finca:</label>
                    <select name="id_finca" class="form-control">
                        @foreach($fincas as $finca)
                        <option value="{{$finca['id']}}">{{$finca['nombre']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="fecha_ini" class="form-label">Inicio de Quincena:</label>
                    <input type="date" name="fecha_ini" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="fecha_fin" class="form-label">Fin de Quincena:</label>
                    <input type="date" name="fecha_fin" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="trabajador" class="form-label">Trabajador:</label>
                    <select name="id_trab" class="form-control">
                        @foreach($trabajadores as $trabajador)
                        <option value="{{$trabajador['id']}}">{{$trabajador['nombres']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="id_act" class="form-label">Actividad:</label>
                    <select name="id_act" class="form-control">
                        @foreach($actividades as $actividad)
                        <option value="{{$actividad['id']}}">{{$actividad['nombre']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="dias_trab" class="form-label">Días Trabajados:</label>
                    <input type="text" name="dias_trab" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="feriado" class="form-label">Días Feriados:</label>
                    <input type="text" name="diasFeriados" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="h_ext" class="form-label">Horas Extra:</label>
                    <input type="text" name="h_ext" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="otros" class="form-label">Otros:</label>
                    <input type="text" name="otros" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="prestamo" class="form-label">Prestamos:</label>
                    <input type="text" name="prestamo" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-default btn-primary">Envia</button>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection