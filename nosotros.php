<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("modulo/head.php"); ?>
</head>

<body>
<div class="page-wrapper">
    <?php include ('modulo/menu.php') ?>
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(img/serpyman_head.png);">
        <div class="auto-container text-right">
        	<h1>Nosotros Serpyman</h1>
            <ul class="bread-crumb"><li><a href="index.php">Home</a></li> <li>Nosotros Serpyman</li></ul>
        </div>
    </section>
    <!-- Page Banner -->
    <!--contenido de servicios-->
    <div class="container">
        <div class="row" style="margin-top: -75px;">
            <div class="col-md-12 col-xs-12">
                <br><br>
                <section class="about-us-area">
                    <div class="about-upper text-center">
                        <div class="row" align="center">
                            <?php
                                $consultarMet = 'SELECT * FROM metatags';
                                $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaMet = mysqli_fetch_array($resultadoMet);
                                    $xLogo      = $filaMet['logo'];
                            ?>
                            <img src="cms/assets/img/meta/<?php echo $xLogo; ?>" width="400" class="img-responsive">
                            <br><br><br>
                            <?php mysqli_free_result($resultadoMet); ?>
                        </div>
                        <div class="auto-container">
                            <?php
                                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='1' AND estado='1'";
                                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaCon = mysqli_fetch_array($resultadoCon);
                                    $xTitulo      = $filaCon['titulo_contenido'];
                                    $xContenido   = $filaCon['contenido'];
                            ?>
                            <div class="sec-title" align="left">
                                <h2><?php echo $xTitulo; ?></h2>
                            </div>
                            <div style="text-align: initial;">
                            <?php echo $xContenido; ?>
                            </div>
                            <br>
                            <br>
                            <br>
                            <?php mysqli_free_result($resultadoCon); ?>
                            <?php
                                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='2' AND estado='1'";
                                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaCon = mysqli_fetch_array($resultadoCon);
                                    $xTitulo      = $filaCon['titulo_contenido'];
                                    $xContenido   = $filaCon['contenido'];
                            ?>
                            <div class="sec-title" align="left">
                                <h2><?php echo $xTitulo; ?></h2>
                            </div>
                            <div style="text-align: initial;">
                            <?php echo $xContenido; ?>
                            </div>
                            <br>
                            <br>
                            <br>
                            <?php mysqli_free_result($resultadoCon); ?>
                            <?php
                                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='3' AND estado='1'";
                                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaCon = mysqli_fetch_array($resultadoCon);
                                    $xTitulo      = $filaCon['titulo_contenido'];
                                    $xContenido   = $filaCon['contenido'];
                            ?>
                            <div class="sec-title" align="left">
                                <h2><?php echo $xTitulo; ?></h2>
                            </div>
                            <div style="text-align: initial;">
                            <?php echo $xContenido; ?>
                            </div>
                            <br>
                            <br>
                            <br>
                            <?php mysqli_free_result($resultadoCon); ?>
                            <?php
                                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='4' AND estado='1'";
                                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaCon = mysqli_fetch_array($resultadoCon);
                                    $xTitulo      = $filaCon['titulo_contenido'];
                                    $xContenido   = $filaCon['contenido'];
                            ?>
                            <div class="sec-title" align="left">
                                <h2><?php echo $xTitulo; ?></h2>
                            </div>
                            <div style="text-align: initial;">
                            <?php echo $xContenido; ?>
                            </div>
                            <br>
                            <br>
                            <br>
                            <?php mysqli_free_result($resultadoCon); ?>
                            <?php
                                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='5' AND estado='1'";
                                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaCon = mysqli_fetch_array($resultadoCon);
                                    $xTitulo      = $filaCon['titulo_contenido'];
                                    $xContenido   = $filaCon['contenido'];
                            ?>
                            <div class="sec-title" align="left">
                                <h2><?php echo $xTitulo; ?></h2>
                            </div>
                            <div style="text-align: initial;">
                            <?php echo $xContenido; ?>
                            </div>
                            <?php mysqli_free_result($resultadoCon); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--contenido de servicios-->
    <br><br><br>
    <?php include ('modulo/footer.php') ?>
</div>
</body>
</html>