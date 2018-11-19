 @extends('layouts.app2')
@section('contenido')
@if(session('success'))
<div class="alert alert-success">
<strong>{{session('success')}}</strong>
</div>
@endif
  <div class="blog">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="sidebar">
                            <div class="widget widget_search">
                            </div>
                            <div class="widget widget_categories">
                                <h4 class="widget-title">
                                    Categoria
                                </h4>
                                <ul>
                                    <li>Practicante para el área Laboral </li>
                                    <li>Practicante para el área Contable-Tributario</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <article class="blog_card">
                            <div class="blog_card_top">
                                <img src="img/blog/1.jpg" alt="blog title " />
                                <div class="blog_date">
                                    20
                                    <span>
                                        Noviembre 2018
                                    </span>
                                </div>
                            </div>
                            <div class="blog_card_bottom">
                                <h4>
                                    <a href="#">
                                            Area Laboral
                                    </a>
                                </h4>
                                <div class="meta_data">
                                    <span>PUESTO DE TRABAJO</span>
                                    <span>2 Postulantes</span>
                                </div>
                                <p>
                                    Estudio contable solicita joven estudiante para realizar actividades:  
                                    Requisitos:
                                    <UL><H5>
                                        <li>En elaboración de Planias. 
                                        <LI>Conocimiento y manejo de Plame .
                                        <li>Conocimiento en subsidios laborales.
                                        <LI>Conocimientos en liquidación de beneficios laborales.

                                    </H5></UL>    
                                </p>
                            </div>
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
                                    Postular
                            </button> 
                        </article>
                        <article class="blog_card">
                            <div class="blog_card_top">
                                <img src="img/blog/2.png" alt="blog title " />
                                <div class="blog_date">
                                    20
                                    <span>
                                        Noviembre 2018
                                    </span>
                                </div>
                            </div>
                            <div class="blog_card_bottom">
                                <h4>
                                    <a href="#">
                                            Area Contable-Tributario
                                    </a>
                                </h4>
                                <div class="meta_data">
                                    <span>Practicas Pre-Profesionales</span>
                                    <span>practicantes</span>
                                    <span>5 Postulantes</span>
                                </div>
                                <p>
                                        Estudio contable solicita joven estudiante para realizar actividades:  
                                        Requisitos:
                                        <UL><H5>
                                            <li>Conocimiento y manejo de algun sistema contable. 
                                            <LI>Conocimiento en tributación .
                                            <li>Conocimientos básicos en normas internacionales de información financieras.
                                            <LI>Análisis de cuentas.
                                            <LI>Conciliaciones bancarias, etc.
    
                                        </H5></UL>    
                                    </p>
                            </div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
                                    Postular
                            </button>                            
                        </article>
                    </div>
                </div>
            </div>



      
      <!-- Modal -->
      <form method="post" action="{{ url('/postular/email')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <input type="text" placeholder="Nombre" class="form-control" id="nombre" name="nombre">
                <input type="text" placeholder="Puesto a Postular" class="form-control" id="puesto" name="puesto">
                <input type="email" placeholder="Correo Electronico" class="form-control" id="email" name="email">
                <label for="file">Adjuntar CV</label>                                    
                <input type="file"  class="form-control" name="file">                                     
                           
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </div>
      </div>
      </form>





 @endsection
