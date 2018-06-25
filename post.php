<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("modulo/head.php"); ?>
    <?php
        $consultarMet = 'SELECT * FROM metatags';
        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaMet = mysqli_fetch_array($resultadoMet);
            $xTitulo    = $filaMet['titulo'];
            $xSlogan    = $filaMet['slogan'];
            $xDes       = $filaMet['description'];
            $xKey       = $filaMet['keywords'];
            $xUrl       = $filaMet['url'];
            $xIco       = $filaMet['ico'];
            $xFace1     = $filaMet['face1'];
            $xFace2     = $filaMet['face2'];
    ?>
    <!-- La tarjeta Twitter comienza desde aquí, si no necesita eliminar esta sección -->
    <meta name="twitter:site" content="<?php echo $xTitulo; ?>" />
    <meta name="twitter:url" content="https://<?php echo $xUrl; ?>" />
    <meta name="twitter:title" content="<?php echo $xTitulo; ?>" /> <!-- maximum 140 char -->
    <meta name="twitter:description" content="<?php echo $xDescripcion; ?>" /> <!-- maximum 140 char -->
    <meta name="twitter:image" content="cms/assets/img/meta/<?php echo $xFace1; ?>" /> <!--cuando publiques esta url de la página en twitter, se mostrará esta imagen-->
    <!-- twitter card ends from here -->

    <!-- facebook abrir gráfico comienza desde aquí, si no es necesario, entonces eliminar gráfico abierto relacio -->
    <meta property="og:title" content="<?php echo $xTitulo; ?>" /> <!-- maximum 140 char -->
    <meta property="og:url" content="https://<?php echo $xUrl; ?>" />
    <meta property="og:description" content="<?php echo $xDescripcion; ?>" /> <!-- maximum 140 char -->
    <meta property="og:locale" content="en_PE" />
    <meta property="og:site_name" content="<?php echo $xTitulo; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="cms/assets/img/meta/<?php echo $xFace1; ?>" />
    <meta property="og:image" content="cms/assets/img/meta/<?php echo $xFace2; ?>" /> <!-- cuando publiques esta url de la página en Facebook, se mostrará esta imagen -->
    <!-- facebook open graph ends from here -->
    <?php
        mysqli_free_result($resultadoMet);
    ?>
</head>
<body>
<div class="page-wrapper">
    <?php include('modulo/menu.php'); ?>
    <?php 
        $consultaNoticias = "SELECT * FROM noticias WHERE cod_noticia='$cod_noticia'";
        $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaNot = mysqli_fetch_array($ejecutarNoticias);
            $xTitulo        = htmlspecialchars($filaNot['titulo']);
            $xDescripcion   = htmlspecialchars($filaNot['noticia']);
            $xImagen        = $filaNot['imagen'];
            $xFecha         = $filaNot['fecha'];
            $xAutor         = $filaNot['autor'];
    ?>
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(img/serpyman_head.png);">
        <div class="auto-container text-right">
            <h1>Serpyman / Blog de Noticias</h1>
            <ul class="bread-crumb"><li><a href="index.php">Home</a></li> <li><a href="blog.php">Blog de Noticias</a></li> <li><?php echo $xTitulo; ?></li></ul>
        </div>
    </section>
    <!-- Page Banner -->
    <!--contenido de servicios-->
    <div class="container">
        <div class="row" style="margin-top: -85px;">
            <div class="col-md-4 col-xs-12" style="margin-top: 30px;">
                <?php include("modulo/sidebar.php"); ?>
            </div>
            <div class="col-md-8 col-xs-12">
                <br><br>
                <!-- Blog Section Begins -->
                <section id="blog" class="blog-area single section">
                    <div class="auto-container">
                        <div class="row">
                            <!-- Post -->
                            <div class="post-item">
                                <!-- Post Title -->
                                <h2 class="wow fadeInLeft"><?php echo $xTitulo; ?></h2>
                                <div class="post wow fadeInUp">
                                    <!-- Image -->
                                    <img class="img-responsive" src="cms/assets/img/noticias/<?php echo $xImages; ?>" alt="" />
                                    <div class="post-content wow fadeInUp">
                                        <!-- Meta -->
                                        <div class="posted-date"><?php echo $xFecha; ?> / <span>por</span> <a href="#"><?php echo $xAutor; ?></a></div>
                                        <!-- Text -->
                                        <?php echo $xDescripcion; ?>
                                        <div class="share-btn">
                                            <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ae1e6fc57e4c84d"></script>
                                            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post -->
                            <?php 
                                $consultaNoticias = "SELECT * FROM noticias WHERE cod_noticia='$cod_noticia'";
                                $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaNot = mysqli_fetch_array($ejecutarNoticias);
                                    $xTitulo        = htmlspecialchars($filaNot['titulo']);
                                    $xDescripcion   = htmlspecialchars($filaNot['noticia']);
                                    $xImagen        = $filaNot['imagen'];
                                    $xFecha         = $filaNot['fecha'];
                                    $xAutor         = $filaNot['autor'];
                            ?>
                            <!-- Author Section -->
                            <div class="author wow fadeInUp">
                                <!-- Image -->
                                <img src="cms/assets/img/meta/<?php echo $xAutor_img; ?>" alt="" />
                                <div class="author-comment">
                                    <h5><?php $xAutor; ?></h5>
                                    <p><?php $xAutor_des; ?></p>
                                </div>                      
                                <div class="clear"></div>                           
                            </div>
                            <!-- Author Section Ends--> 
                            <?php
                                }

                            ?>
                        </div>
                    </div>
                </section><!-- Our Blog Section Ends -->
            </div>
        </div>
    </div>
    <!--contenido de servicios-->
    <br><br><br>
    <?php include('modulo/footer.php') ?>
</div>
</body>
</html>