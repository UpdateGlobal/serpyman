<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <?php include("modulo/head.php"); ?>
  <link rel="stylesheet prefetch" href="/css/gallery.css" />
  <link rel="stylesheet prefetch" href="/css/prettyphoto.css" />
</head>
<body>
  <div class="page-wrapper">
    <?php include ('modulo/menu.php'); ?>
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(/img/serpyman_head.png);">
      <div class="auto-container text-right">
        <h1>Serpyman / Galer&iacute;as</h1>
        <ul class="bread-crumb"><li><a href="/index.php">Home</a></li> <li>Galer&iacute;as</li></ul>
      </div>
    </section>
    <!-- Page Banner -->
    <!-- Contenido de servicios -->
    <!-- Servicios -->
    <section class="portfolio section-padding pb-0" style="background-color: #f7f7f7">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="sec-title" align="left">
              <h2>Galer&iacute;a <span>Serpyman</span></h2>
            </div>
            <div class="clear-fix"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="btn-group btn-group-justified filter-button-group" role="group" aria-label="filterImages">
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default is-checked" data-filter="*">Todos</button>
              </div>
              <?php
                $consultarCategoria = "SELECT * FROM galerias_categorias ORDER BY orden";
                $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaCat = mysqli_fetch_array($resultadoCategoria)){
                  $xCategoria = $filaCat['categoria'];
                  $xSlug = $filaCat['slug'];
              ?>      
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" data-filter=".<?php echo $xSlug; ?>"><?php echo $xCategoria; ?></button>
              </div>
              <?php
                }
                mysqli_free_result($resultadoCategoria);
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="grid">
          <div class="grid-sizer col-xs-12 col-sm-6 col-md-4 col-lg-4"></div>
          <?php
            $consultarGal = "SELECT gc.cod_categoria, gc.categoria, gc.slug, g.* FROM galerias_categorias as gc, galerias as g WHERE g.cod_categoria=gc.cod_categoria AND g.estado='1' ORDER BY orden ASC";
            $resultadoGal = mysqli_query($enlaces,$consultarGal) or die('Consulta fallida: ' . mysqli_error($enlaces));
            while($filaGal = mysqli_fetch_array($resultadoGal)){
              $xCodigo        = $filaGal['cod_galeria'];
              $xCategoria     = utf8_encode($filaGal['categoria']);
              $xSlug          = $filaGal['slug'];
              $xNomGal        = utf8_encode($filaGal['titulo']);
              $xCategoria     = $filaGal['categoria'];
              $xImagen        = $filaGal['imagen'];
          ?>
          <div class="col-xs-12 col-sm-6 col-md-4 grid-item <?php echo $xSlug; ?>">
            <a class="prettyphoto" href="/cms/assets/img/galerias/<?php echo $xImagen; ?>" rel="prettyPhoto[portfolio]">
              <img class="thumbnail img-responsive" src="/cms/assets/img/galerias/<?php echo $xImagen; ?>" />
            </a>
          </div>
          <?php
            }
            mysqli_free_result($resultadoGal);
          ?>
        </div>
      </div>
    </section>
    <!--Servicios-->
    <?php include ('modulo/footer.php') ?>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/gallery-custom.js"></script>
  </div>
</body>
</html>