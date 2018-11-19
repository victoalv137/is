 @extends('layouts.app2')
@section('contenido')
@if(session('success'))
<div class="alert alert-success">
<strong>{{session('success')}}</strong>
</div>
@endif
                <div class="img_card">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-7 content_section">
                            <!--=================== contact info and form start====================-->
                            <div class="content_box">
                                <div class="content_box_inner">
                                    <div>
                                        <h3>
                                            CONTACTENOS
                                        </h3>
                                        <p>
                                            Si tiene alguna consulta que hacernos, no dude en contactarnos que gustosamente le responderemos. Llámenos por teléfono, escríbanos a nuestro correo electrónico o complete el formulario mostrado
                                        </p>

                                        <ul class="nosyely_list pt50">
                                            <li>
                                                <div class="img_box_two">
                                                    <img src="img/iconos/satelite.png" alt="info list">
                                                    <div class="content align-items-center">
                                                        <p>
                                                            1CAL.SAN ANDRES NRO. 136 INT. 3PIS URB. SAN ANDRES I ETAPA<br/>
                                                            Trujillo,Perù
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_box_two">
                                                    <img src="img/iconos/scheme.png" alt="info list">
                                                    <div class="content align-items-center">
                                                        <p>
                                                            info@estudiocontable.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_box_two">
                                                    <img src="img/iconos/smartphone.png" alt="info list">
                                                    <div class="content align-items-center">
                                                        <p>
                                                            +51 984 153 245
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                          
                                    <form method="post" action="{{ url('/contacto/store')}}">
                                        {{ csrf_field() }}                                    
                                        <div class="mt75 row justify-content-center">
                                            <div class="col-lg-6 col-12">
                                                <input type="text" placeholder="Nombre" class="form-control" id="name" name="name">
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <input type="email" placeholder="Correo Electronico" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="col-12">
                                                <input type="text" placeholder="Asunto" class="form-control" id="subject" name="subject">
                                            </div>
                                            <div class="col-12">
                                                <textarea  placeholder="Mensaje" class="form-control" cols="4" rows="4" id="mensaje" name="mensaje"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-default">Enviar</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <!--=================== contact info and form end====================-->
                        </div>
                        <div class="col-md-6 col-5 img_section" style="background-color:#FDFEFE;">
                            <!--map -->
                            <img src="img/mapa.jpg" width="700" height="700">
                            <!--map end-->
                        </div>
                    </div>
                </div>

 @endsection
