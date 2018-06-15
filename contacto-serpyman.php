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
            <h1>Serpyman / Contactanos</h1>
            <ul class="bread-crumb"><li><a href="index.php">Home</a></li> <li>Contactanos</li></ul>
        </div>
    </section>
    <!-- Page Banner -->

    <!--Contact Us Area-->
    <section class="contact-us-area">
    	<div class="auto-container">
        	<div class="row clearfix">
            	

            	<div class="col-md-6 col-sm-12 col-xs-12 contact-form wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                	<div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <h2>Contac<span>tanos</span></h2>
                    </div>
                    
                    <form id="contact-form" method="post" action="sendemail.php">
                        <div class="field-container clearfix">
                        	
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            	<input type="text" name="username" value="" placeholder="Nombre">
                            </div>
                            
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            	<input type="email" name="email" value="" placeholder="Apellidos">
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            	<input type="text" name="subject" value="" placeholder="Telefono">
                            </div>
                             <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <input type="text" name="subject" value="" placeholder="Correo">
                            </div>
                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            	<textarea name="Mensaje" placeholder="Message"></textarea>
                            </div>
                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            	<button type="submit" name="submit-form" class="primary-btn hvr-bounce-to-left"><span class="btn-text">Enviar Mensaje</span> <strong class="icon"><span class="f-icon flaticon-letter110"></span></strong></button>
                            </div>
                          
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 contact-form wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <h2>Mas<span> Contacto</span></h2>
                    </div>
                    <div class="project-info">
                        <ul class="clearfix">
                            <li><i class="fas fa-map-marker-alt" style="color: #000;"></i> <strong>Dirección:</strong> Av. Francisco de Luna Pizarro  N°230 Urb. Ingenieria</li>
                            <li><i class="fas fa-mobile-alt" style="color: #000;"></i> <strong>Telefonos :</strong> (01) 415-3766 / RPM : 975 235 649</li>
                            <li><i class="fas fa-envelope" style="color: #000;"></i> <strong>Correo:</strong> informes@serpyman.com.pe</li>
                        </ul>
                    </div>
                </div>

                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.2769658267175!2d-77.06285918486991!3d-12.024443691482093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cedec70910db%3A0xa7318ee42f84b687!2sAv.+Luna+Pizarro+230%2C+Cercado+de+Lima+15103!5e0!3m2!1ses-419!2spe!4v1528921941342"  height="600" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
            
            </div>
        </div>
    </section>
    <!--Contact Us Area-->

    <?php include ('modulo/footer.php') ?>
    

            
    
</div>
<!--End pagewrapper-->
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/googlemaps.js"></script>
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
