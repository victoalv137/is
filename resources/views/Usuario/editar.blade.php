@extends('layouts.app3')
@section('contenido')   
<h1>Editar Usuario</h1><br>
<div class="container">
<form method="post" action="{{ url('/EmpresasR/usuario/'.$usuario->id.'/update')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">        
        <div class="col-sm-6">            
                <div class="form-group">                        
                    <label for="">Seleccionar Imagen</label><br><br>
                    <img src="/images/{{$usuario->Avatar}}" width="300px" height="300px"><br><br>
                    <input type="file"   name="Uavatar">
               </div>    
        </div>
        <div class="col-sm-6">            
                <div class="form-group">                
                        <label for="">Nombres</label> 
                        <input type="text" class="form-control"  value="{{$usuario->Nombres}}" placeholder="Nombres" name="UNombres"> 
                        <label for="">Apellidos</label> 
                        <input type="text" class="form-control" value="{{$usuario->Apellidos}}" placeholder="Apellidos" name="UApellidos"> 
                        <label for="">Direccion</label> 
                        <input type="text" class="form-control" value="{{$usuario->Direccion}}" placeholder="Direccion" name="UDireccion">
                        <label for="">Telefono</label> 
                        <input type="text" class="form-control" value="{{$usuario->Telefono}}" placeholder="Telefono" name="UTelefono">
                        <label for="">email</label> 
                        <input type="email" class="form-control" value="{{$usuario->Email}}" placeholder="email" name="UEmail">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 offset-5 text-right"> 
    <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</form>
</div>
@endsection