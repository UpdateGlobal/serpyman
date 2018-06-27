<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("modulo/head.php"); ?>
</head>
<body>
<div class="page-wrapper">
    <?php include ('modulo/menu.php'); ?>
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(/img/serpyman_head.png);">
        <div class="auto-container text-right">
            <h1>Serpyman / Nuestras Politicas</h1>
            <ul class="bread-crumb"><li><a href="/index.php">Home</a></li> <li>Nuestras Politicas</li></ul>
        </div>
    </section>
    <!-- Page Banner -->
    <!--contenido de servicios-->
    <div class="container-fluid">
        <div class="row" style="margin-top: -75px;">
            <?php
                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='9'";
                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaCon = mysqli_fetch_array($resultadoCon)){
                    $xTitulo      = $filaCon['titulo_contenido'];
                    $xImagen      = $filaCon['img_contenido'];
                    $xContenido   = $filaCon['contenido'];
            ?>
            <div class="col-md-6 col-xs-12">
                <br><br>
                <section class="about-us-area">
                    <div class="about-upper text-center">
                        <div class="auto-container">
                             <div class="sec-title" align="left">
                                <h2>Nuestras <span>Politicas</span></h2>
                            </div>
                            <div class="sec-text wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms" align="left">                
                                <?php echo $xContenido; ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6 col-xs-12">
                <img src="/cms/assets/img/nosotros/<?php echo $xImagen; ?>" alt="" class="imgpolitic img-responsive">
            </div>
            <?php
                }
                mysqli_free_result($resultadoCon); 
            ?>
        </div>
    </div>
    <!--contenido de servicios-->
    <br><br><br>
    <?php include ('modulo/footer.php'); ?>
</div>
</body>
</html>