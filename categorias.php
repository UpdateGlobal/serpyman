<?php include("cms/module/conexion.php"); ?>
<?php $slug = $_REQUEST['slug']; 
$consultarCategorias = "SELECT * FROM noticias_categorias WHERE slug='$slug'";
$resultadoCategorias = mysqli_query($enlaces,$consultarCategorias) or die('Consulta fallida: ' . mysqli_error($enlaces));
$filaCat = mysqli_fetch_array($resultadoCategorias);
    $cod_categoria = $filaCat['cod_categoria']; 
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("modulo/head.php"); ?>
</head>
<body>
<div class="page-wrapper">
    <?php include("modulo/menu.php"); ?>
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(/img/serpyman_head.png);">
        <div class="auto-container text-right">
            <h1>Serpyman / Blog de Noticias</h1>
            <ul class="bread-crumb"><li><a href="/index.php">Home</a></li> <li>Blog de Noticias</li></ul>
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
                <br>
                <!--Servicios-->
                <section class="top-services">
                    <?php
                        $consultarNoticias = "SELECT * FROM noticias WHERE cod_categoria='$cod_categoria' ORDER BY fecha";
                        $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        while($filaNot = mysqli_fetch_array($resultadoNoticias)){
                            $xCodigo        = $filaNot['cod_noticia'];
                            $xSlug          = $filaNot['slug'];
                            $xTitulo        = $filaNot['titulo'];
                            $xImagen        = $filaNot['imagen'];
                            $xDescripcion   = $filaNot['noticia'];
                    ?>
                    <article class="col-md-6 col-sm-6 col-xs-12 post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms" style="padding: 0;">
                        <div class="post-inner" style="padding: 5px;">
                            <figure class="image">
                                <img class="img-responsive" src="/cms/assets/img/noticias/<?php echo $xImagen; ?>" alt="" />
                                <span class="curve"></span>
                            </figure>
                            <div class="content">
                                <div class="inner-box">
                                    <h3><?php echo $xTitulo; ?></h3>
                                    <div class="text"><?php 
                                        $xDescripcion_r = strip_tags($xDescripcion);
                                        $strCut = substr($xDescripcion_r,0,100);
                                        $xDescripcion_r = substr($strCut,0,strrpos($strCut, ' ')).'...';
                                        echo strip_tags($xDescripcion_r);
                                    ?></div>
                                    <a href="/noticia/<?php echo $xSlug; ?>" class="read_more">Leer Mas...</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php
                        }
                        mysqli_free_result($resultadoNoticias);
                    ?>
                </section>
                <!--Servicios-->
            </div>
        </div>
    </div>
    <!--contenido de servicios-->
     <br><br><br>
    <?php include ('modulo/footer.php') ?>
</div>
</body>
</html>