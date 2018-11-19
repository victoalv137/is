@extends('Layouts.app3')
@section('contenido')
<h1>Listado de Empresas</h1><br>
<div class="container">
    <div class="row" >
        @foreach ($empresas as $empresa)
        <div class="col-sm" style="margin-bottom:20px;">
            <div class="card text-center" style="width: 13rem;">
            <img  class="card-img-top" src="images/{{$empresa->Avatar }}" alt="Card image cap" width="100px" height="150px">
            <div class="card-body">
                <h5 class="card-title">{{ $empresa->RazonSocial}}</h5>
                <p class="card-text">{{ $empresa->Telefono}}</p>
                <a href="{{ url('Empresas/'.$empresa->id) }}" class="btn btn-primary">Ver detalles >></a>
            </div>
            </div>
        </div>
        @endforeach
    
    </div>

    
</div>
@endsection