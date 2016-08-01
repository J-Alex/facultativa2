@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center">Registrar Nueva Finca</div>
        <div class="panel-body">
            <form class=""  action="{{ url('/fincas') }}" method="POST">
                {{ csrf_field() }}
                
                <div class="form-group col-md-6">
                    <label for="nombre" class="form-label">Nombre de Finca: </label>
                    <input name="nombre" type="text" class="form-control">
                </div>
            </form>    
        </div>
    </div>    
@endsection