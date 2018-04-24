<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Monster Admin Template</title>
    {{-- <link href="css/bootstrap.css" rel="stylesheet"> --}}
    <!-- Bootstrap Core CSS -->
    <link href="css/plantilla/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="css/plantilla.css" rel="stylesheet"> --}}
    <!-- Custom CSS -->
    <link href="css/plantilla/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/plantilla/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> -->

</head>
<body  class="fix-header card-no-border">
    
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Barra superior - estilo en pages.scss -->
        <!-- ============================================================== -->
            @yield('navbar')
        <!-- ============================================================== -->
        <!-- Fin barra superior -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Sidebar izquierda - estilo en sidebar.scss  -->
        <!-- ============================================================== -->
            @yield('aside')
        <!-- ============================================================== -->
        <!-- Fin sidebar izquierda  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Contenido de pagina  -->
        <!-- ============================================================== -->
            @yield('contenido')
        <!-- ============================================================== -->
        <!-- Fin de contenido de pagina  -->
        <!-- ============================================================== -->
    </div>

    {{--  @yield('javascript')  --}}
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    {{-- <script src="js/plantilla/jquery.min.js"></script> --}}
    <script src="js/plantilla.js"></script>
    {{-- <!-- Bootstrap tether Core JavaScript -->
    <script src="js/plantilla/tether.min.js"></script>
    <script src="js/plantilla/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/plantilla/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/plantilla/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/plantilla/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/plantilla/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/plantilla/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="js/plantilla/jquery.flot.js"></script>
    <script src="js/plantilla/jquery.flot.tooltip.min.js"></script>
    <script src="js/plantilla/flot-data.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="js/plantilla/jQuery.style.switcher.js"></script> --}}

</body>
</html>