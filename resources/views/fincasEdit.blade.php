@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center">Actualizar Finca</div>
        <div class="panel-body">
                
            @foreach($finca as $farm)
            <form class=""  action='{{ url("/fincas/$farm->id") }}' method="POST">
                {{ csrf_field() }}
                <div class="form-group col-md-6">
                    <label for="nombre" class="form-label">Nombre de finca: </label>
                    <input name="nombre" type="text" class="form-control" value="{{ $farm ['nombre'] }}">
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