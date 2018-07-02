    <!--Footer-->
    <section class="foo">
        <div class="container-fluid">
            <div class="row">
                <div class="co-md-12" align="center">
                    <?php
                        $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='6'";
                        $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        $filaCon = mysqli_fetch_array($resultadoCon);
                            $xImagen      = $filaCon['img_contenido'];
                            $xContenido   = $filaCon['contenido'];
                            $xEstado      = $filaCon['estado'];
                    ?>
                    <img src="/cms/assets/img/nosotros/<?php echo $xImagen; ?>" class="logo_fo img_foo" />
                    <p class="title_foo"><?php echo $xContenido; ?></p>
                    <?php
                        mysqli_free_result($resultadoCon);
                    ?>
                </div>
            </div>
            <div class="row img_foo" align="center">
                <?php
                    $consultarSol = "SELECT * FROM social WHERE estado='1' ORDER BY orden";
                    $resultadoSol = mysqli_query($enlaces,$consultarSol) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaSol = mysqli_fetch_array($resultadoSol)){
                        $xType      = $filaSol['type'];
                        $xLinks     = $filaSol['links'];
                        $xOrden     = $filaSol['orden'];
                        if($xType=="fa-facebook-square"){ $xValor = "fa-facebook-f"; }
                        if($xType=="fa-twitter-square"){ $xValor = "fa-twitter"; }
                        if($xType=="fa-google-plus-official"){ $xValor = "fa-google-plus-g"; }
                        if($xType=="fa-linkedin"){ $xValor = "fa-linkedin-in"; }
                        if($xType=="fa-behance"){ $xValor = "fa-behance"; }
                        if($xType=="fa-youtube-play"){ $xValor = "fa-youtube"; }
                        if($xType=="fa-vimeo"){ $xValor = "fa-vimeo-v"; }
                        if($xType=="fa-wordpress"){ $xValor = "fa-wordpress"; }
                        if($xType=="fa-tumblr-square"){ $xValor = "fa-tumblr"; }
                        if($xType=="fa-pinterest"){ $xValor = "fa-pinterest-p"; }
                        if($xType=="fa-instagram"){ $xValor = "fa-instagram"; }
                        if($xType=="fa-flickr"){ $xValor = "fa-flickr"; }
                ?>
                <a href="<?php echo $xLinks; ?>" target="_blank"><span class="social"><i class="fab <?php echo $xValor; ?>"></i></span></a>
                <?php
                    }
                    mysqli_free_result($resultadoSol);
                ?>
            </div>
            <div class="row" style="background-color: black;">
                <div class="col-md-6"></div>
                <div class="col-md-6" align="right">
                    <p class="derecho">Serpyman 2018 - Dise&ntilde;o por <a href="/index.php">Update Global Marketing</p>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
    <!--End pagewrapper-->
    <script src="/js/jquery.js" type="text/javascript"></script> 
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/revolution.min.js" type="text/javascript"></script>
    <script src="/js/bxslider.js" type="text/javascript"></script>
    <script src="/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="/js/jquery.mixitup.min.js" type="text/javascript"></script>
    <script src="/js/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="/js/wow.js" type="text/javascript"></script>
    <script src="/js/script.js" type="text/javascript"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>
    <script type="text/javascript">
        function openNav() {
            document.getElementById("mySidenav").style.width = "300px";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0px";
        }
    </script>