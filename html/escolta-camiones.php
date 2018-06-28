<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Serpyman</title>

    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel=”canonical” href=””/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--favicon-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon.png">

    <!-- La tarjeta Twitter comienza desde aquí, si no necesita eliminar esta sección -->
    <!-- <meta name="twitter:card" content="summary" /> -->
    <meta name="twitter:site" content="@yourtwitterusername" />
    <meta name="twitter:creator" content="@yourtwitterusername" />
    <meta name="twitter:url" content="url/" />
    <meta name="twitter:title" content="title." /> <!-- maximum 140 char -->
    <meta name="twitter:description" content=" " /> <!-- maximum 140 char -->
    <meta name="twitter:image" content="img/" />  <!--cuando publiques esta url de la página en twitter, se mostrará esta imagen-->
    <!-- twitter card ends from here -->

    <!-- facebook abrir gráfico comienza desde aquí, si no es necesario, entonces eliminar gráfico abierto relacio -->
    <meta property="og:title" content="" /><!-- maximum 140 char -->
    <meta property="og:url" content="" />
    <meta property="og:description" content=""><!-- maximum 140 char -->
    <meta property="og:locale" content="en_PE" />
    <meta property="og:site_name" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="../img" /> <!-- cuando publiques esta url de la página en Facebook, se mostrará esta imagen -->
     <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <!-- facebook open graph ends from here -->

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="css/owl.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/in_style.css" type="text/css" >
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    <!--stikySocial-->
    <div class="header-fix-right is_stuck  hidden-xs hidden-sm" style="position: fixed; top: 70%; width: 70px;">
        <ul class="header-fix-redes">
            <li><a href="https://www.facebook.com/www.serpymam.com.pe/" target="_blank"><img src="img/facebook-f.svg" width="12"></a></li>
        </ul>
        <span class="header-fix-text">Síguenos:</span>
    </div>
    <!--stikySocial-->    
    
    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- preloader -->
    
    <?php include ('modulo/menu.php') ?>
    
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(img/serpyman_head.png);">
        <div class="auto-container text-right">
            <h1>Serpyman / Escolta Camiones</h1>
            <ul class="bread-crumb"><li><a href="index.php">Home</a></li> <li>Escolta Camiones</li></ul>
        </div>
    </section>
    <!-- Page Banner -->

    <!--contenido de servicios-->
    <div class="container-fluid">
        <div class="row" style="margin-top: -75px;">
            <div class="col-md-8 col-xs-12">
                <br><br>
                <section class="about-us-area">
                    <div class="about-upper text-center">
                        <div class="auto-container">
                             <div class="sec-title" align="left">
                                <h2>Escolta <span> Camiones</span></h2>
                            </div>
                            <div class="sec-text wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms" align="left">
                                <p style="text-align: justify;">
                                    Protegeremos su valiosa carga desde el punto que nos indique hasta el ingreso a su destino, contamos con procedimientos y formatos que garantizan el fiel cumplimiento y dan respaldo ante cualquier contingencia o incidente. Durante el trayecto realizamos registro fotográfico como prueba fehaciente de la ruta al igual que el registro de firmas. Sus bienes estarán protegidos por nuestro sistema de calidad de gestión y resguardo, impidiendo pérdidas e incumplimiento en tiempos pactados.
                                </p>

                            </div>
                            <figure class="image wow zoomIn" data-wow-delay="300ms" data-wow-duration="1000ms"><img src="img/servicios/seg_camiones.jpg" alt=""></figure>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4 col-xs-12">
                
                <!-- ==================================== -->

                <?php include ('modulo/form.php') ?>

                <!-- ==================================== -->

            </div>
        </div>
    </div>
    <!--contenido de servicios-->
     <br><br><br>
    <?php include ('modulo/footer.php') ?>

</div>
<!--End pagewrapper-->
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>