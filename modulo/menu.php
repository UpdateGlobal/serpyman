    <?php
        $consultarCot = 'SELECT * FROM contacto';
        $resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaCot  = mysqli_fetch_array($resultadoCot);
            $xDireccion   = $filaCot['direction'];
            $xPhone       = $filaCot['phone'];
            $xEmail       = $filaCot['email'];
    ?>
    <div class="direcciones">
        <div class="contenedor"><?php if($xEmail!=""){ ?><i class="fas fasx fa-envelope"></i> <?php echo $xEmail; ?><?php } ?><?php if($xPhone!=""){ ?> | <i class="fas fasx fa-mobile-alt"></i> <?php echo $xPhone; ?><?php } ?><?php if($xDireccion!=""){ ?> | <i class="fas fasx fa-map-marker-alt"></i> <?php echo $xDireccion; ?><?php } ?></div>
    </div>
    <?php
        mysqli_free_result($resultadoCot);
    ?>
    <!--stikySocial-->
    <div class="header-fix-right is_stuck hidden-xs hidden-sm" style="position: fixed; bottom: 0%; width: 70px;">
        <ul class="header-fix-redes">
            <?php
                $consultarSol = "SELECT * FROM social WHERE estado='1' ORDER BY orden";
                $resultadoSol = mysqli_query($enlaces,$consultarSol) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaSol = mysqli_fetch_array($resultadoSol)){
                    $xType      = $filaSol['type'];
                    $xLinks     = $filaSol['links'];
                    $xOrden     = $filaSol['orden'];
                    if($xType=="fa-facebook-square"){ $xValor = "facebook-f"; }
                    if($xType=="fa-twitter-square"){ $xValor = "twitter-f"; }
                    if($xType=="fa-google-plus-official"){ $xValor = "google-plus-f"; }
                    if($xType=="fa-linkedin"){ $xValor = "linkedin-f"; }
                    if($xType=="fa-behance"){ $xValor = "behance-f"; }
                    if($xType=="fa-youtube-play"){ $xValor = "youtube-f"; }
                    if($xType=="fa-vimeo"){ $xValor = "vimeo-f"; }
                    if($xType=="fa-wordpress"){ $xValor = "wordpress-f"; }
                    if($xType=="fa-tumblr-square"){ $xValor = "tumblr-f"; }
                    if($xType=="fa-pinterest"){ $xValor = "pinterest-f"; }
                    if($xType=="fa-instagram"){ $xValor = "instagram-f"; }
                    if($xType=="fa-flickr"){ $xValor = "flickr-f"; }
            ?>
            <li>
                <a href="<?php echo $xLinks; ?>" target="_blank">
                    <img src="/img/icon/<?php echo $xValor; ?>.svg" width="12">
                </a>
            </li>
            <?php
                }
                mysqli_free_result($resultadoSol);
            ?>
        </ul>
        <span class="header-fix-text">S&iacute;guenos:</span>
    </div>
    <!--stikySocial-->
    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- preloader -->
    <!--Menu-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <nav class="navbar">
                    <div class="container-fluid" style="padding: 10px 5px 10px;">
                        <div class="header_box1">
                            <div class="header_box1_menu">
                                <span class="budel" onclick="openNav()">&#9776;</span>
                            </div>
                            <?php
                                $consultarMet = 'SELECT * FROM metatags';
                                $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaMet = mysqli_fetch_array($resultadoMet);
                                    $xLogo      = $filaMet['logo'];
                            ?>
                            <div class="header_box1_logo">
                                <a href="/index.php">
                                    <img src="/cms/assets/img/meta/<?php echo $xLogo; ?>" width="220" class="logo" />
                                </a>
                            </div>
                            <?php
                                mysqli_free_result($resultadoMet);
                            ?>
                        </div>
                        <div id="mySidenav" class="sidenav">
                            <ul class="side">
                                <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                                <li><a href="/nosotros.php"><i class="fas fa-angle-right"></i> Nosotros</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-angle-right"></i> Seguridad</a>
                                    <ul class="dropdown-menu">
                                        <?php
                                            $consultarservicio = "SELECT * FROM servicios WHERE estado='1' ORDER BY orden";
                                            $resultadoservicio = mysqli_query($enlaces,$consultarservicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                            while($filaSer = mysqli_fetch_array($resultadoservicio)){
                                                $xCodigo = $filaSer['cod_servicio'];
                                                $xTitulo = $filaSer['titulo'];
                                                $xSlug   = $filaSer['slug'];
                                        ?>
                                        <li><a href="/seguridad/<?php echo $xSlug; ?>"><?php echo $xTitulo; ?></a></li>
                                        <?php
                                            }
                                            mysqli_free_result($resultadoservicio);
                                        ?>
                                    </ul>
                                </li>
                                <?php
                                    $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='9' AND estado='1'";
                                    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                    while($filaCon = mysqli_fetch_array($resultadoCon)){
                                        $xEstado = $filaCon['estado'];
                                        if($xEstado=='1'){
                                ?>
                                <li><a href="/politicas-serpyman.php"><i class="fas fa-angle-right"></i> Politicas</a></li>
                                <?php
                                        } 
                                    }
                                    mysqli_free_result($resultadoCon);
                                ?>
                                <li><a href="/galerias.php"><i class="fas fa-angle-right"></i> Galer&iacute;a</a></li>
                                <li><a href="/blog.php"><i class="fas fa-angle-right"></i> Blog</a></li>
                                <li><a href="/contacto-serpyman.php"><i class="fas fa-angle-right"></i> Contacto</a></li>
                            </ul>
                            <div class="row">
                                <?php
                                    $consultarCot = 'SELECT * FROM contacto';
                                    $resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                    $filaCot  = mysqli_fetch_array($resultadoCot);
                                        $xDirection   = $filaCot['direction'];
                                        $xPhone       = $filaCot['phone'];
                                        $xEmail       = $filaCot['email'];
                                ?>
                                <ul class="redes">
                                    <li><i class="fas fasx fa-envelope"></i> <?php echo $xEmail; ?></li>
                                    <li><i class="fas fasx fa-mobile-alt"></i> <?php echo $xPhone; ?></li>
                                    <li><i class="fas fasx fa-map-marker-alt"></i> <?php echo $xDirection; ?></li>
                                </ul>
                                <?php
                                    mysqli_free_result($resultadoCot);
                                ?>
                            </div>
                            <!-- <div class="row">
                                <div class="social">
                                    <a href="https://www.facebook.com/www.serpymam.com.pe/" target="new"><i class="fab fa-facebook-square"></i> facebook.com</a> 
                                </div>
                            </div> -->
                            <div class="row">
                                <i class="fab fa-facebook-square"></i>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="col-md-6">
                    <!-- <p>hoola</p> -->
                </div>
            </div>
        </div>
    </div>
    <!--imagenMovil-->
    <section class="hidden-sm hidden-md hidden-lg">
        <div class="container-fluid" style="padding: 0;margin: 0;">
            <div align="center" style="margin-top: -100px;">
                <h2 class="aaa">Expertos <br><span>en <br></span>Seguridad</h2>
            </div>
            <img src="/img/bg_movil.png" style="width: 100%;">
        </div>
    </section>
    <!--imagenMovil-->