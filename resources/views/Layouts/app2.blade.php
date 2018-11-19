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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/et-line.css" rel="stylesheet">
    <link href="css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
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
                    <img src="img/logo_oficial.png" alt="zarate">
                </a>
            </div>
            <!--logo end-->

            <!--main menu -->
            <div class="side_menu_section">
                <ul class="menu_nav">
                    <li>
                         <a href=" /inicio">
                            INICIO
                        </a>                     
                    </li>
                    <li>
                        <a href="/nosotros">
                            NOSOTROS
                        </a>
                    </li>
                    <li>
                        <a href="/servicios">
                            SERVICIOS
                        </a>
                    </li>
                    <li>
                        <a href="/clientes">
                            CLIENTES
                        </a>
                    </li>
                    <li>
                        <a href="/practicas">
                            PRACTICAS
                        </a>
                    </li>
                    <li>
                        <a href="/contacto">
                            CONTACTO
                        </a>
                    </li>
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
            <div>   
                <div class="container align-content-center" align="right ">
                    <u><a href="/login" title=”Esto es un tool.tip”><font color="brown"><b>Iniciar Sesion</b></font></a></u>
                </div>
            </div><br>
           @yield('contenido')
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>


<!-- jquery -->
<script src="js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="js/slick.min.js"></script>
<!--inicio Filter-->
<script src="js/imgloaded.js"></script>
<script src="js/isotope.js"></script>
<!-- Magnific-popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!--Counter-->
<script src="js/jquery.counterup.min.js"></script>
<!-- WOW JS -->
<script src="js/wow.min.js"></script>
<!-- Custom js -->
<script src="js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuahgsm_qfH1F3iywCKzZNMdgsCfnjuUA"></script>
</body>
</html>