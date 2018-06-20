<!DOCTYPE html>
<html>
<head>
    <?php include("include/head.php"); ?>
    <!-- La tarjeta Twitter comienza desde aquí, si no necesita eliminar esta sección -->
    <!-- <meta name="twitter:card" content="summary" /> -->
    <meta name="twitter:site" content="@yourtwitterusername" />
    <meta name="twitter:creator" content="@yourtwitterusername" />
    <meta name="twitter:url" content="url/" />
    <meta name="twitter:title" content="title." /> <!-- maximum 140 char -->
    <meta name="twitter:description" content=" " /> <!-- maximum 140 char -->
    <meta name="twitter:image" content="img/" />  <!--cuando publiques esta url de la página en twitter, se mostrará esta imagen-->
    <!-- twitter card ends from here -->

    <!-- facebook abrir gráfico comienza desde aquí, si no es necesario, entonces eliminar gráfico abierto relacio -->
    <meta property="og:title" content="" /><!-- maximum 140 char -->
    <meta property="og:url" content="" />
    <meta property="og:description" content="" /><!-- maximum 140 char -->
    <meta property="og:locale" content="en_PE" />
    <meta property="og:site_name" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="../img" />
    <meta property="og:image" content="../img" /><!-- cuando publiques esta url de la página en Facebook, se mostrará esta imagen -->
    <!-- facebook open graph ends from here -->
</head>
<body>
<div class="page-wrapper">
    <!--stikySocial-->
    <div class="header-fix-right is_stuck  hidden-xs hidden-sm" style="position: fixed; top: 70%; width: 70px;">
        <ul class="header-fix-redes">
            <li><a href="https://www.facebook.com/www.serpymam.com.pe/" target="_blank"><img src="img/facebook-f.svg" width="12"></a></li>
        </ul>
        <span class="header-fix-text">Síguenos:</span>
    </div>
    <!--stikySocial-->    
    
    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- preloader -->
    
    <?php include ('modulo/menu.php') ?>
    
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(img/serpyman_head.png);">
        <div class="auto-container text-right">
            <h1>Serpyman / Blog de Noticias</h1>
            <ul class="bread-crumb"><li><a href="index.php">Home</a></li> <li ><a href="blog.php"> Blog de Noticias</a></li><li>Titulo de la Noticia</li></ul>
        </div>
    </section>
    <!-- Page Banner -->

    <!--contenido de servicios-->
    <div class="container">
        <div class="row" style="margin-top: -85px;">
            <div class="col-md-4 col-xs-12" style="margin-top: 30px;">

                    <div class="sidebar">
                        <!-- Search -->
                        <div class="search wow fadeInUp animated" style="visibility: visible;">
                            <form>
                                <input type="search" name="name" placeholder="Buscar..">
                                <input type="submit" value="submit">
                            </form>
                        </div>
                        <div class="blog/popular-post widget wow fadeInUp animated" style="visibility: visible;">
                            <div class="sec-title" align="left" style="margin-bottom: 0px;">
                                <h2>Categorias</h2>
                            </div>
                            <ul>
                                <li><i class="fas fa-chevron-right"></i><a href="" class="black"> Seguridad</a></li>
                                <li><i class="fas fa-chevron-right"></i><a href="" class="black"> Industrial</a></li>
                                <li><i class="fas fa-chevron-right"></i><a href="" class="black"> Residencias</a></li>
                                <li><i class="fas fa-chevron-right"></i><a href="" class="black"> Comercial</a></li>
                                <li><i class="fas fa-chevron-right"></i><a href="" class="black"> Camiones</a></li>
                                <li><i class="fas fa-chevron-right"></i><a href="" class="black"> Escolta</a></li>
                            </ul>
                        </div>
                        
                        <div class="blog/popular-post widget wow fadeInUp animated" style="visibility: visible;">    
                            <div class="sec-title" align="left" style="margin-bottom: 0px;">
                                <h2>Tags</h2>
                            </div>
                            <ul class="tag">
                                <li class="tags"><i class="fas fa-check"></i> <a href="" class="black"> Seguridad</a></li>
                                <li class="tags"><i class="fas fa-check"></i> <a href="" class="black"> Industrial</a></li>
                                <li class="tags"><i class="fas fa-check"></i> <a href="" class="black"> Residencias</a></li>
                                <li class="tags"><i class="fas fa-check"></i> <a href="" class="black"> Comercial</a></li>
                                <li class="tags"><i class="fas fa-check"></i> <a href="" class="black"> Camiones</a></li>
                                <li class="tags"><i class="fas fa-check"></i> <a href="" class="black"> Escolta</a></li>
                            </ul>  
                        </div>

                        
                        <!-- Newest Posts -->
                        <div class="blog/popular-post widget wow fadeInUp animated" style="visibility: visible;">
                            <div class="sec-title" align="left" style="margin-bottom: 0px;">
                                <h2>Ultimas Noticias</h2>
                            </div>
                            <ul class="popular-list">
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="images/blog/popular-post/1.jpg" alt=""></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Titulo de Post</a></h3>
                                        <div class="posted-date">Junio 13, 2018</div>
                                    </div>
                                </li>
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="images/blog/popular-post/2.jpg" alt=""></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Titulo de Post</a></h3>
                                        <div class="posted-date">Junio 13, 2018</div>
                                    </div>
                                </li>
                                <!-- Item -->
                            </ul>
                        </div><!-- Newest Post Ends-->
                    </div>

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
                                    <h2 class="wow fadeInLeft">Loren Imsupm titulo post</h2>
                                    <div class="post wow fadeInUp">
                                        <!-- Image -->
                                        <img class="img-responsive" src="images/blog/1.jpg" alt="" />
                                        <div class="post-content wow fadeInUp"> 
                                            <!-- Meta -->
                                            <div class="posted-date">Junio 13, 2018   /   <span>por</span> <a href="#">Luis Bernal</a></div>
                                            <!-- Text -->
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It has survived not only five centuries. </p>
                                            <p><i>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</i></p>
                                            <div class="share-btn">

                                                <!-- aqui addthis -->

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Post --> 
                                
                                <!-- Author Section -->
                                <div class="author wow fadeInUp">
                                    <!-- Image -->
                                    <img src="images/blog/author/1.jpg" alt="" />
                                        <div class="author-comment">
                                            <h5>Luis Bernal</h5>
                                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                        </div>                      
                                <div class="clear"></div>                           
                                </div><!-- Author Section Ends--> 
                        </div>
                    </div>
                </section><!-- Our Blog Section Ends -->
            </div>
        </div>
    </div>
    <!--contenido de servicios-->
    <br><br><br>
    <?php include ('modulo/footer.php') ?>
</div>
<!--End pagewrapper-->
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>