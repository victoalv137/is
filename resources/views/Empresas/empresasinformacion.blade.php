@extends('Layouts.app4')
@section('contenido')
<h1>Empresa : {{ $empresa->RazonSocial}}</h1><br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img  src="/images/{{$empresa->Avatar}}" width="300px" height="300px">  
        </div>
        <div class="col-sm-6">
                <h3> RUC : {{ $empresa->Ruc}}</h3>
                <h3> Direccion : {{ $empresa->Direccion}}</h3>
                <h3> Telefono : {{ $empresa->Telefono}}</h3>
                <h3> Fecha Inicio : {{ $empresa->created_at}}</h3>
                <h3> Giro Negocio : {{ $empresa->GiroNegocio}}</h3>
                @if(Auth::user()->tipo!='E')
                    <h3> Pago Mensual : {{ $empresa->PagoMensual}}</h3>
                    @if($empresa->Estado=='1')
                    <h3> Estado : Activado</h3>
                    @else
                    <h3> Estado : Desactivado</h3>   
                    @endif
                @endif
                                           
        </div>
    </div>
@if(Auth::user()->tipo!='E')
    <div class="row">
    <div class="col-md-3"> 
            <a href="{{ url('Empresas/'.$empresa->id.'/autenticar') }}" class="btn btn-secondary">
                
                @if($empresa->Estado=='1')
                Desactivar
                @else
                Activar
                @endif
            </a>          
    </div>
    
    </div>
@endif
</div>
@endsection