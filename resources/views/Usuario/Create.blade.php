@extends('layouts.app3')
@section('contenido')   
<h2>Registrar Usuario</h2>
<div class="container">
<form method="post" action="{{ url('/EmpresasR/usuario/store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">        
        <div class="col-sm-6">            
                <div class="form-group">                        
                    <label for="">Seleccionar Imagen</label><br><br>
                    <img src="{{asset('img/usuario.png')}}" width="300px" height="300px"><br><br>
                    <input type="file"   name="Uavatar">
               </div>    
        </div>
        <div class="col-sm-6">            
                <div class="form-group">                
                        <label for="">Nombres</label> 
                        <input type="text" class="form-control" placeholder="Nombres" name="UNombres"> 
                        <label for="">Apellidos</label> 
                        <input type="text" class="form-control"placeholder="Apellidos" name="UApellidos"> 
                        <label for="">Direccion</label> 
                        <input type="text" class="form-control"placeholder="Direccion" name="UDireccion">
                        <label for="">Telefono</label> 
                        <input type="text" class="form-control"placeholder="Telefono" name="UTelefono">
                        <label for="">email</label> 
                        <input type="email" class="form-control"placeholder="email" name="UEmail">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 offset-5 text-right"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
</div>
@endsection