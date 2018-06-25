<div class="sidebar">
    <div class="blog/popular-post widget wow fadeInUp animated" style="visibility: visible;">
        <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
            <h2 class="title_cat">Categorias</h2>
        </div>
        <ul>
            <?php
                $consultarCategoria = "SELECT * FROM noticias_categorias WHERE estado='1' ORDER BY orden";
                $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaCat = mysqli_fetch_array($resultadoCategoria)){
                    $xCodigo    = $filaCat['cod_categoria'];
                    $xCategoria = $filaCat['categoria'];
                    $xOrden     = $filaCat['orden'];
                    $xEstado    = $filaCat['estado'];
            ?>
            <li><i class="fas fa-chevron-right"></i><a href="categoria.php?cod_categoria=<?php echo $xCodigo; ?>" class="black"> <?php echo $xCategoria; ?></a></li>
            <?php 
                }
                mysqli_free_result($resultadoCategoria);
            ?>
        </ul>
    </div>
</div>