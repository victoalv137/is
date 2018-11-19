@extends('layouts.app3')
@section('contenido')   
<h1>Registrar Usuario</h1><br>
<div class="col-md-3">    
            <a href="{{ url('/EmpresasR/usuario/create') }}" class="btn btn-success">Crear Usuario</a>
        </div><br>
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto" >
            <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombre</th>               
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $cont=1;     
                @endphp
                @foreach ($usuarios as $usuario)
                <tr>      
                    <th scope="row" style="width:15%" >{{ $cont }}</th>
                    <td style="width:40%">{{$usuario->name.' '.$usuario->Apellidos}}</td>
                    <td style="width:45%">                       
                        <a href="{{ url('EmpresasR/usuario/'.$usuario->id.'/editar') }}" class="btn btn-info">Editar</a>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td >      
                </tr>
                @php
                $cont++;     
                @endphp
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection