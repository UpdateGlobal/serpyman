<?php include("cms/module/conexion.php"); ?>
<?php
$cod_servicio   = $_REQUEST['cod_servicio'];

$consultaServicios = "SELECT * FROM servicios WHERE cod_servicio='$cod_servicio'";
$ejecutarServicios = mysqli_query($enlaces,$consultaServicios) or die('Consulta fallida: ' . mysqli_error($enlaces));
$filaSer = mysqli_fetch_array($ejecutarServicios);
    $xTitulo       = $filaSer['titulo'];
    $xImagen       = $filaSer['imagen'];
    $xDescripcion  = $filaSer['descripcion'];
    $xForm         = $filaSer['form'];
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("modulo/head.php"); ?>
</head>
<body>
    <?php include("modulo/menu.php"); ?>
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(img/serpyman_head.png);">
        <div class="auto-container text-right">
        	<h1>Serpyman / Seguridad Comercial</h1>
            <ul class="bread-crumb"><li><a href="index.php">Home</a></li> <li>Seguridad Comercial</li></ul>
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
                                <h2><?php echo $xTitulo; ?></h2>
                            </div>
                            <div class="sec-text wow fadeInUp contenido-texto" data-wow-delay="300ms" data-wow-duration="1000ms" align="left">
                                <?php echo $xDescripcion; ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php if($xForm==1){ ?>
            <div class="col-md-4 col-xs-12">
                <?php include("modulo/form.php"); ?>
            </div>
            <?php }else{ ?>
            <div class="col-md-4 col-xs-12" style="margin-top: 50px;">
                <figure class="image" data-wow-delay="300ms" data-wow-duration="1000ms"><img class="img-responsive" src="cms/assets/img/servicios/<?php echo $xImagen; ?>" alt=""></figure>
            </div>
            <?php } ?>
        </div>
    </div>
    <!--contenido de servicios-->
    <br><br><br>
    <?php include ('modulo/footer.php') ?>
</div>
</body>
</html>