<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("modulo/head.php"); ?>
    <?php $num=""; ?>
</head>
<body>
<div class="page-wrapper">
    <?php include('modulo/menu.php'); ?>
        <!-- Main Slider -->
        <section class="main-slider">
            <div class="tp-banner-container hidden-xs">
                <div class="tp-banner">
                    <ul>
                        <?php
                            $consultarBanner = "SELECT * FROM banners WHERE estado='1' ORDER BY orden";
                            $resultadoBanner = mysqli_query($enlaces,$consultarBanner) or die('Consulta fallida: ' . mysqli_error($enlaces));
                            while($filaBan = mysqli_fetch_array($resultadoBanner)){
                                $xTitulo    = $filaBan['titulo'];
                                $xImagen    = $filaBan['imagen'];
                                $xLink      = $filaBan['link'];
                        ?>
                        <li data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/image-2.jpg"  data-saveperformance="off">
                            <img src="/cms/assets/img/banner/<?php echo $xImagen; ?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            
                            <div class="tp-caption lfb tp-resizeme"
                            data-x="right" data-hoffset="-15"
                            data-y="center" data-voffset="-60"
                            data-speed="1500"
                            data-start="500" 
                            data-easing="easeOutExpo"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.3"
                            data-endspeed="1200"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap; font-size: 32px;"><div class="big-title text-right"><h2><span class="txt-white"><?php echo $xTitulo; ?></span></h2></div></div>
                            
                            <div class="tp-caption lfb tp-resizeme"
                            data-x="right" data-hoffset="-15"
                            data-y="center" data-voffset="170"
                            data-speed="1500"
                            data-start="1500"
                            data-easing="easeOutExpo"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.3"
                            data-endspeed="1200"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-btn text-right"><a href="<?php echo $xLink; ?>" class="primary-btn banerboton hvr-bounce-to-left"><span class="btn-text">LEER MAS +</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></a></div></div>
                        </li>
                        <?php 
                            }
                            mysqli_free_result($resultadoBanner);
                        ?>
                    </ul>
                	<div class="tp-bannertimer"></div>
                </div>
            </div>
        </section>
        <!-- Main Slider-->
        
        <!--Top Services-->
        <section class="top-welcome">
            <div class="auto-container">
                <div class="row">
                    <?php
                        $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='1'";
                        $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        $filaCon = mysqli_fetch_array($resultadoCon);
                            $xCodigo      = $filaCon['cod_contenido'];
                            $xTitulo      = $filaCon['titulo_contenido'];
                            $xImagen      = $filaCon['img_contenido'];
                            $xContenido   = $filaCon['contenido'];
                            $xEstado      = $filaCon['estado'];
                    ?>
                    <div class="col-md-6 col-xs-12">
                        
                        <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <h2><?php echo $xTitulo; ?> <span>Serpyman</span></h2>
                        </div>
                        <div class="sec-text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <p><?php 
                                $xContenido_r = strip_tags($xContenido);
                                $strCut = substr($xContenido_r,0,550);
                                $xContenido_r = substr($strCut,0,strrpos($strCut, ' ')).'...';
                                echo strip_tags($xContenido_r);
                            ?></p>
                            <br>
                            <div class="link-btn">
                                <a href="/nosotros.php" class="primary-btn aboutbtn hvr-bounce-to-left"><span class="btn-text">LEER M&Aacute;S...</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12" align="center">
                        <img src="/cms/assets/img/nosotros/<?php echo $xImagen; ?>" class="img-responsive img_welcome" />
                    </div>
                    <?php
                        mysqli_free_result($resultadoCon);
                    ?>     
                </div>
            </div>
    	</section>
        <!--Top Services-->

        <!--Servicios-->
        <section class="top-services">
            <div class="auto-container">
                <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <h2>Servicios<span> de Seguridad </span> Serpyman</h2>
                </div>
                <?php
                    $consultarservicio = "SELECT * FROM servicios WHERE estado='1' ORDER BY orden";
                    $resultadoservicio = mysqli_query($enlaces,$consultarservicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaSer = mysqli_fetch_array($resultadoservicio)){
                        $xCodigo      = $filaSer['cod_servicio'];
                        $xSlug        = $filaSer['slug'];
                        $xTitulo      = $filaSer['titulo'];
                        $xDescripcion = $filaSer['descripcion'];
                        $xImagen      = $filaSer['imagen'];
                        $xOrden       = $filaSer['orden'];
                        $xEstado      = $filaSer['estado'];
                ?>
                <article class="col-lg-4 col-md-6 col-sm-6 col-xs-12 post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="post-inner">
                        <figure class="image">
                            <img class="img-responsive" src="/cms/assets/img/servicios/<?php echo $xImagen; ?>" alt="" />
                            <span class="curve"></span>
                        </figure>
                        <div class="content">
                            <div class="inner-box">
                                <h3><?php echo $xTitulo; ?></h3>
                                <div class="text"><?php 
                                    $xDescripcion_r = strip_tags($xDescripcion);
                                    $strCut = substr($xDescripcion_r,0,200);
                                    $xDescripcion_r = substr($strCut,0,strrpos($strCut, ' ')).'...';
                                    echo strip_tags($xDescripcion_r);
                                ?></div>
                                <a href="/seguridad/<?php echo $xSlug; ?>" class="read_more">Leer M&aacute;s...</a>
                            </div>
                        </div>
                    </div>
                </article>
                <?php
                    }
                    mysqli_free_result($resultadoservicio);
                ?>
            </div>
        </section>
        <!--Servicios-->

        <!--Trabaja-->
        <section class="fact-counter fact-counter-one">
            <div class="inner clearfix">
                <?php
                    $consultarVal = "SELECT * FROM valores WHERE estado='1'";
                    $resultadoVal = mysqli_query($enlaces,$consultarVal) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaVal = mysqli_fetch_array($resultadoVal)){
                        $xImagen    = $filaVal['icono'];
                        $xTitulo    = $filaVal['titulo_valores'];
                        $num++;
                        if($num=='2'){ $num=0;}
                ?>
                <div class="column one <?php if($num==1){ echo "odd"; }else{ echo "even"; } ?> wow fadeIn animated counted">
                    <div class="<?php if($xImagen==1){ echo "content1"; } if($xImagen==2){ echo "content2"; } if($xImagen==3){ echo "content3"; } if($xImagen==4){ echo "content4"; } ?>"></div>
                    <h2 class="work_sec"><?php echo $xTitulo; ?></h2>
                </div>
                <?php
                    }
                    mysqli_free_result($resultadoVal);
                ?>
            </div>
        </section>
        <!--Trabaja-->

        <!--News Area-->
        <section class="news-area">
        	<div class="auto-container">
                <div class="cont">
                    <div class="row">
                        <div class="col-md-6" align="left">
                            <?php
                                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='7'";
                                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaCon = mysqli_fetch_array($resultadoCon);
                                    $xTitulo      = $filaCon['titulo_contenido'];
                                    $xContenido   = $filaCon['contenido'];
                            ?>
                            <div class="notice">
                                <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                                    <h2><?php echo $xTitulo; ?> <span>Serpyman</span></h2>
                                </div>
                                <div class="sec-text wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                                    <?php echo $xContenido; ?>
                                </div>
                            </div>
                            <?php
                                mysqli_free_result($resultadoCon);
                            ?>
                            <section class="top-services" style="padding: 0px !important;">
                                <!--Post-->
                                <article class="col-md-12 col-sm-12 col-xs-12 post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                                    <?php
                                        $consultarNoticias = "SELECT cn.cod_categoria, cn.categoria, n.* FROM noticias_categorias as cn, noticias as n WHERE n.cod_categoria=cn.cod_categoria ORDER BY fecha LIMIT 1";
                                        $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                        while($filaNot = mysqli_fetch_array($resultadoNoticias)){
                                            $xCodigo = $filaNot['cod_noticia'];
                                            $xTitulo = $filaNot['titulo'];
                                            $xImagen = $filaNot['imagen'];
                                            $xSlug   = $filaNot['slug'];
                                            $xDescripcion = $filaNot['noticia'];
                                            $xFecha = $filaNot['fecha'];
                                    ?>
                                    <div class="post-inner">
                                        <figure class="image">
                                            <img class="img-responsive" src="/cms/assets/img/noticias/<?php echo $xImagen; ?>" alt="" />
                                            <span class="curve"></span>
                                        </figure>
                                        <div class="content">
                                            <div class="inner-box">
                                                <h3><?php echo $xTitulo; ?></h3>
                                                <?php
                                                    $xDescripcion_r = strip_tags($xDescripcion);
                                                    $strCut = substr($xDescripcion_r,0,200);
                                                    $xDescripcion_r = substr($strCut,0,strrpos($strCut, ' ')).'...';
                                                ?>
                                                <div class="text"><?php echo $xDescripcion_r; ?></div>
                                                <a href="/noticia/<?php echo $xSlug; ?>" class="read_more">Leer M&aacute;s...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                        mysqli_free_result($resultadoNoticias);
                                    ?>
                                </article>
                            </section>
                        </div>
                        <div class="col-md-6" align="left">
                            <?php
                                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='8'";
                                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaCon = mysqli_fetch_array($resultadoCon);
                                    $xTitulo      = $filaCon['titulo_contenido'];
                                    $xContenido   = $filaCon['contenido'];
                            ?>
                            <div class="clintes_po">
                                <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                                    <h2><?php echo $xTitulo; ?> <span>Serpyman</span></h2>
                                </div>    
                                <div class="sec-text wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                                    <?php echo $xContenido; ?>
                                </div>
                            </div>
                            <?php
                                mysqli_free_result($resultadoCon);
                            ?>
                            <div class="owl-carousel owl-theme" align="center">
                                <?php
                                    $consultarCarrusel = "SELECT * FROM carrusel ORDER BY orden";
                                    $resultadoCarrusel = mysqli_query($enlaces,$consultarCarrusel) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                    while($filaCar = mysqli_fetch_array($resultadoCarrusel)){
                                        $xImagen    = $filaCar['imagen'];
                                ?>
                                <div class="item" align="center">
                                    <div class="txt_clientes"></div>
                                    <img src="/cms/assets/img/carrusel/<?php echo $xImagen; ?>" />
                                </div>
                                <?php
                                    }
                                    mysqli_free_result($resultadoCarrusel);
                                ?>    
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--News Area-->
        <?php include('modulo/footer.php'); ?>
    </div>
</div>
</body>
</html>
