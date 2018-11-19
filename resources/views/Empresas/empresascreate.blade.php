@extends('Layouts.app3')
@section('contenido')   
<h1>Registrar Empresa</h1><br>
<div class="container">
<form method="post" action="{{ url('/Empresas')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">        
        <div class="col-sm-4">            
                <div class="form-group">                        
                    <label for="">Seleccionar Imagen</label><br><br>
                    <img src="{{asset('img/empresa.png')}}" width="300px" height="300px"><br><br>
                    <input type="file"   name="avatar">
               </div>    
        </div>
        <div class="col-sm-4">            
                <div class="form-group">                
                        <label for="">Razón Social</label> 
                        <input type="text" class="form-control" placeholder="Razón Social" name="RazonSocial"> 
                        <label for="">RUC</label> 
                        <input type="text" class="form-control"placeholder="Registro Único de Contribuyentes" name="Ruc"> 
                        <label for="">Direccion</label>
                        <input type="text" class="form-control"placeholder="Direccion" name="Direccion">                                            
                </div>
        </div>
        <div class="col-sm-4">            
                <div class="form-group">                        
                        <label for="">Telefono</label> 
                        <input type="text" class="form-control"placeholder="Telefono" name="Telefono">
                        <label for="">Giro Negocio</label> 
                        <input type="text" class="form-control"placeholder="Giro Negocio" name="Giro"> 
                        <label for="">Pago Mensual</label> 
                        <input type="text" class="form-control"placeholder="Pago Mensual" name="Pago">
                        <label for="">Email</label> 
                        <input type="email" class="form-control"placeholder="email" name="Email">
                </div>
        </div>
    </div>
    <div class="col-md-3 offset-5 text-right"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
</div>
@endsection