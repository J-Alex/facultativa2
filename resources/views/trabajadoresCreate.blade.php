@extends('layouts.app')

@section('content')
        <div class="panel panel-default">
            <div class="panel-heading text-center">Registrar Nuevo Trabajador</div>
            <div class="panel-body">
                <form class=""  action="{{ url('/trabajadores') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <div class="form-group col-md-6">
                        <label for="nombres" class="form-label">Nombres: </label>
                        <input name="nombres" type="text" class="form-control">
                    </div>        
                    <div class="form-group col-md-6">
                        <label for="apellidos" class="form-label">Apellidos: </label>
                        <input name="apellidos" type="text" class="form-control">
                    </div>        
                    <div class="form-group col-md-6">
                        <label for="inss" class="form-label">N° INSS: </label>
                        <input name="inss" type="text" class="form-control">
                    </div>        
                    <div class="form-group col-md-6">
                        <label for="civil" class="form-label">Estado Civil: </label>
                        <input name="civil" type="text" class="form-control">
                    </div>        
                    <div class="form-group col-md-6">
                        <label for="telefono" class="form-label">Teléfono: </label>
                        <input name="telefono" type="text" class="form-control">
                    </div>        
                    <div class="form-group col-md-6">
                        <label for="cedula" class="form-label">N° de Cédula: </label>
                        <input name="cedula" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tipo" class="form-label">Tipo: </label>
                        <input name="tipo" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cargo" class="form-label">Cargo: </label>
                        <input name="cargo" type="text" class="form-control">
                    </div>        
                    <div class="form-group col-md-6">
                        <label for="genero" class="form-label">Género: </label>
                        <input name="genero" type="text" class="form-control">
                    </div>        
                    <div class="form-group col-md-6">
                        <label for="foto" class="form-label">Foto: </label>
                        <input name="foto" type="file" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="submit" class="btn btn-default btn-primary right">
                    </div>
                </form>    
            </div>
        </div>    

    
    <!--<div class="container">
        <h1>tablas</h1>
        <div class="table-responsive">            
            <table class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                    <tr class="active">
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apelido</th>
                        <th>Edad</th>
                        <th>Género</th>
                        <th>Curso</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="success">
                        <td>0</td>
                        <td>Jennier</td>
                        <td>Cruz</td>
                        <td>24</td>
                        <td>Macho</td>
                        <td>Buctrap</td>
                    </tr>
                    <tr class="warning">
                        <td>1</td>
                        <td>Jennier</td>
                        <td>Cruz</td>
                        <td>24</td>
                        <td>Macho</td>
                        <td>Laravel</td>
                    </tr><tr class="danger">
                        <td>2</td>
                        <td>Jennier</td>
                        <td>Cruz</td>
                        <td>24</td>
                        <td>Macho</td>
                        <td>JavaScript</td>
                    </tr><tr class="info">
                        <td class="active">3</td>
                        <td class="success">Jennier</td>
                        <td class="warning">Cruz</td>
                        <td class="danger">24</td>
                        <td class="info">Macho</td>
                        <td class="">HTML&CSS</td>
                    </tr>
                </tbody>
            </table>
        </div>   
    </div>-->
@endsection