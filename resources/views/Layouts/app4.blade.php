<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="zarate -inicio">
    <meta name="keywords" content="zarate , inicio">
    <meta name="author" content="Pharaohlab">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>WJ ZARATE & VILLARREAL S.A.C</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/et-line.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<div class="body-container container-fluid">
    <a class="menu-btn" href="javascript:void(0)">
        <i class="ion ion-grid"></i>
    </a>
    <div class="row justify-content-center">
        <!--=================== side menu ====================-->
        <div class="col-lg-2 col-md-3 col-12 menu_block">

            <!--logo -->
            <div class="logo_box">
                <a href=" {{ url('Empresas') }}">
                    <img src="{{ asset('img/logo_oficial.png') }}" alt="zarate">
                </a>
            </div>
            <!--logo end-->

            <!--main menu -->
            <div class="side_menu_section">
                <ul class="menu_nav">
                    <li>
                         <a href="{{ url('Empresas/'.$empresa->id) }}">
                            Empresa
                        </a>                     
                    </li>
                    <li>
                        <a href="{{ url('Empresas/'.$empresa->id.'/declaracion') }}">
                            Declaracion
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('Empresas/'.$empresa->id.'/impuesto') }}">
                            Impuestos
                        </a>
                    </li>  
                        <!-- Authentication Links -->
                        @guest
                          
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest                                      
                </ul>
            </div>
            <!--main menu end -->

            <!--social and copyright -->
            <div class="side_menu_bottom">
                <div class="side_menu_bottom_inner">
                    <ul class="social_menu">
                        <li>
                            <a href="#"> <i class="ion ion-social-pinterest"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ion ion-social-facebook"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ion ion-social-twitter"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ion ion-social-dribbble"></i> </a>
                        </li>
                    </ul>
                    <div class="copy_right">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="copyright">WJ ZARATE & VILLARREAL S.A.C &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados</p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
            <!--social and copyright end -->

        </div>
        <!--=================== side menu end====================-->

        <!--=================== content body  Contenido====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">            
           @yield('contenido')
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>


<!-- jquery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<!--slick carousel -->
<script src="{{ asset('js/slick.min.js') }}"></script>
<!--inicio Filter-->
<script src="{{ asset('js/imgloaded.js') }}"></script>
<script src="{{ asset('js/isotope.js') }}"></script>
<!-- Magnific-popup -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!--Counter-->
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<!-- WOW JS -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>