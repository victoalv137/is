@extends('layouts.app4')
@section('contenido')   
<h1>Declaracion Empresa : {{ $empresa->RazonSocial}} </h1><br>
@if(Auth::user()->tipo!='E') 
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Declaracion</a>            
            </div>
        </div>
        <div class="col-md-5">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <form id="formFortalezas" method="post" action="{{ url('Empresas/'.$empresa->id.'/declaracion/store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ingresar Declaracion</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar Declaracion" name="Descripcion">
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ingresar Documento</label>
                                <input type="file"  class="form-control" name="Documento">
                                
                            </div>
                        </div>
                        </div> 
                        
                        <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
                
                </div>
    </div>
</div>
    <br><br>
<!-- Modal -->
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto" >
            <table class="table">
            <thead>
                <tr>
                <th scope="col">N°</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha</th>
                <th scope="col">Documento</th>
                <th scope="col">Opcion</th>

                </tr>
            </thead>
            <tbody>
                @php
                    $cont=1;     
                @endphp
                @foreach ($declaracion as $declaraciones)
                <tr>      
                    <th scope="row" style="width:10%" >{{ $cont }}</th>
                    <td style="width:25%">{{ $declaraciones->descripcion}}</td>
                    <td style="width:20%">{{ $declaraciones->created_at}}</td>
                    <td style="width:20%">{{ $declaraciones->archivo}}</td>
                    <td style="width:25%">
                    <a href="{{ url('Empresas/'.$empresa->id.'/declaracion/descargar/'.$declaraciones->id) }}" class="btn btn-success">Descargar</a>
                    </td>
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
@else
<!-- barra Area -->
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto" >
            <table class="table">
            <thead>
                <tr>
                <th scope="col">N°</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha</th>
                <th scope="col">Documento</th>
                <th scope="col">Opcion</th>

                </tr>
            </thead>
            <tbody>
                @php
                    $cont=1;     
                @endphp
                @foreach ($declaracion as $declaraciones)
                <tr>      
                    <th scope="row" style="width:10%" >{{ $cont }}</th>
                    <td style="width:25%">{{ $declaraciones->descripcion}}</td>
                    <td style="width:20%">{{ $declaraciones->created_at}}</td>
                    <td style="width:20%">{{ $declaraciones->archivo}}</td>
                    <td style="width:25%">
                    <a href="{{ url('Empresas/'.$empresa->id.'/declaracion/descargar/'.$declaraciones->id) }}" class="btn btn-success">Descargar</a>
                    </td>
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
@endif
</div>
@endsection