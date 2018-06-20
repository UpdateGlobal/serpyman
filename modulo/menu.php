    <!--stikySocial-->
    <div class="header-fix-right is_stuck  hidden-xs hidden-sm" style="position: fixed; top: 70%; width: 70px;">
        <ul class="header-fix-redes">
            <li><a href="https://www.facebook.com/www.serpymam.com.pe/" target="_blank"><img src="img/facebook-f.svg" width="12"></a></li>
        </ul>
        <span class="header-fix-text">S&iacute;guenos:</span>
    </div>
    <!--stikySocial-->
    <!-- Preloader 
    <div class="preloader"></div> -->
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
                            <div class="header_box1_logo"><a href="index.php">
                                <img src="cms/assets/img/meta/<?php echo $xLogo; ?>" width="220" class="logo" ></a>
                            </div>
                        </div>

                        <div id="mySidenav" class="sidenav">
                            <ul class="side">
                                <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                                <li><a href="nosotros.php"><i class="fas fa-angle-right"></i> Nosotros</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-angle-right"></i> Seguridad</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="seguridad-empresarial.php">Empresarial</a></li>
                                        <li><a href="seguridad-comercial.php">Comercial</a></li>
                                        <li><a href="seguridad-industrial.php">Industrial</a></li>
                                        <li><a href="seguridad-residencial.php">Residencial</a></li>
                                        <li><a href="escolta-camiones.php">Escolta de Camiones</a></li>
                                        <li><a href="sistemas-de-alarmas.php">Sistemas de Alarmas</a></li>
                                    </ul>
                                </li>
                                <li><a href="politicas-serpyman.php"><i class="fas fa-angle-right"></i> Politicas</a></li>
                                <li><a href="blog.php"><i class="fas fa-angle-right"></i> Blog</a></li>
                                <li><a href="contacto-serpyman.php"><i class="fas fa-angle-right"></i> Contacto</a></li>
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
        <!--Menu-->