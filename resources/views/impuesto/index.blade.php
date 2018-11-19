@extends('layouts.app4')
@section('contenido')   
<h1>Impuestos de la  Empresa : {{ $empresa->RazonSocial}} </h1><br>
@if(Auth::user()->tipo!='E')                
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Impuesto</a>            
            </div>
        </div>
        <div class="col-md-10">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <form id="formFortalezas" method="post" action="{{ url('Empresas/'.$empresa->id.'/impuesto/store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ingresar ImpuestoIGV</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar ImpuestoIGV" name="ImpuestoIGV">
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ingresar ImpuestoRenta</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar ImpuestoRenta" name="ImpuestoRenta">
                                
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ingresar Descripcion</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar Descripcion" name="descripcion">
                                
                            </div>
                        </div>
                        </div> 
                        
                        <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
                
                </div>
    </div>
</div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto" >
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">ImpuestoIGV</th>
                    <th scope="col">ImpuestoRenta</th>
                    <th scope="col">Descripcion</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @php
                        $cont=1;     
                    @endphp
                    @foreach ($impuesto as $impuestos)
                    <tr>      
                        <th scope="row" style="width:10%" >{{ $cont }}</th>
                        <td style="width:30%">{{ $impuestos->created_at}}</td>
                        <td style="width:20%">{{ $impuestos->ImpuestoIGV}}</td>
                        <td style="width:20%">{{ $impuestos->ImpuestoRenta}}</td>
                        <td style="width:20%">{{ $impuestos->Descripcion}}</td>
                         
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
<!-- Modal --> 

<!-- barra Area -->
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto" >
            <table class="table">
            <thead>
                <tr>
                <th scope="col">N°</th>
                <th scope="col">Fecha</th>
                <th scope="col">ImpuestoIGV</th>
                <th scope="col">ImpuestoRenta</th>
                <th scope="col">Descripcion</th>
                
                </tr>
            </thead>
            <tbody>
                @php
                    $cont=1;     
                @endphp
                @foreach ($impuesto as $impuestos)
                <tr>      
                    <th scope="row" style="width:10%" >{{ $cont }}</th>
                    <td style="width:30%">{{ $impuestos->created_at}}</td>
                    <td style="width:20%">{{ $impuestos->ImpuestoIGV}}</td>
                    <td style="width:20%">{{ $impuestos->ImpuestoRenta}}</td>
                    <td style="width:20%">{{ $impuestos->Descripcion}}</td>
                     
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