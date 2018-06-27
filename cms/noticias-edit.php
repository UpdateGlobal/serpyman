<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_noticia    = $_REQUEST['cod_noticia'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == ""){
  $consultaNoticias = "SELECT * FROM noticias WHERE cod_noticia='$cod_noticia'";
  $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaNot = mysqli_fetch_array($ejecutarNoticias);
  $cod_noticia    = $filaNot['cod_noticia'];
  $cod_categoria  = $filaNot['cod_categoria'];
  $titulo         = htmlspecialchars($filaNot['titulo']);
  $noticia        = htmlspecialchars($filaNot['noticia']);
  $imagen         = $filaNot['imagen'];
  $fecha          = $filaNot['fecha'];
  $autor          = $filaNot['autor'];
  $estado         = $filaNot['estado'];
}
if($proceso=="Actualizar"){ 
  $cod_noticia    = $_POST['cod_noticia'];
  $cod_categoria  = $_POST['cod_categoria'];
  $titulo         = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $slug           = $titulo;
  $slug           = preg_replace('~[^\pL\d]+~u', '-', $slug);
  $slug           = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
  $slug           = preg_replace('~[^-\w]+~', '', $slug);
  $slug           = trim($slug, '-');
  $slug           = preg_replace('~-+~', '-', $slug);
  $slug           = strtolower($slug);
  if (empty($slug)){
      return 'n-a';
  }
  $noticia        = mysqli_real_escape_string($enlaces, $_POST['noticia']);
  $imagen         = $_POST['imagen'];
  $fecha          = $_POST['fecha'];
  $autor          = $_POST['autor'];
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}
  $actualizarNoticias = "UPDATE noticias SET cod_noticia='$cod_noticia', cod_categoria='$cod_categoria', slug='$slug', titulo='$titulo', noticia='$noticia', imagen='$imagen', fecha='$fecha', autor='$autor', estado='$estado' WHERE cod_noticia='$cod_noticia'";
  $resultadoActualizar = mysqli_query($enlaces,$actualizarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
  header("Location:noticias.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
      function Validar(){
        if(document.fcms.titulo.value==""){
          alert("Debe escribir un título");
          document.fcms.titulo.focus();
          return; 
        }
        document.fcms.action = "noticias-edit.php";
        document.fcms.proceso.value="Actualizar";
        document.fcms.submit();
      } 
      function Imagen(codigo){
        url = "agregar-foto.php?id=" + codigo;
        AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
      }
      function soloNumeros(e) 
      { 
        var key = window.Event ? e.which : e.keyCode 
        return ((key >= 48 && key <= 57) || (key==8)) 
      }
  </script>
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>
    <?php $menu="noticias"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Noticias</strong>
            <small></small>
          </h1>
        </div>
        <?php $page="noticias"; include("module/menu-noticias.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Nueva Noticia</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="imagen">Imagen:</label><br>
                  <small>(840px x 613px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $imagen; ?></p><?php } ?>
                  <input class="form-control" name="imagen" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" id="imagen" value="<?php echo $imagen; ?>" />
                </div>
                <div class="col-4 col-lg-2">
                  <button class="btn btn-info" type="button" name="boton2" onClick="javascript:Imagen('NOT');" /><i class="fa fa-save"></i> Examinar</button>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="categoria">Categorías:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <select class="form-control" id="categoria" name="cod_categoria">
                    <?php 
                      //Al cargar la pagina debe listar todas las categorias existentes
                      if($cod_categoria == ""){
                        $consultaCat = "SELECT * FROM noticias_categorias WHERE estado='1'";
                        $resultaCat = mysqli_query($enlaces,$consultaCat);
                        while($filaCat = mysqli_fetch_array($resultaCat)){
                          $xcodCat = $filaCat['cod_categoria'];
                          $xnomCat = $filaCat['categoria'];
                          echo '<option value='.$xcodCat.'>'.$xnomCat.'</option>';
                        }
                      }else{
                        // Al recargar la pagina que seleccione el elemento escogido
                        $consultaCat = "SELECT * FROM noticias_categorias WHERE cod_categoria='$cod_categoria'";
                        $resultaCat = mysqli_query($enlaces,$consultaCat);
                          while($filaCat = mysqli_fetch_array($resultaCat)){
                            $xcodCat = $filaCat['cod_categoria'];
                            $xnomCat = $filaCat['categoria'];
                            echo '<option value='.$xcodCat.' selected="selected">'.$xnomCat.'</option>';
                          }
                        //Cargar todas las categorias menos la escogida
                        $consultaCat = "SELECT * FROM noticias_categorias WHERE cod_categoria!='$cod_categoria'";
                        $resultaCat = mysqli_query($enlaces,$consultaCat);
                        while($filaCat = mysqli_fetch_array($resultaCat)){
                          $xcodCat = $filaCat['cod_categoria'];
                          $xnomCat = $filaCat['categoria'];
                          echo '<option value='.$xcodCat.'>'.$xnomCat.'</option>';
                        }
                      }
                    ?>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="titulo">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="titulo" type="text" id="titulo" value="<?php echo $titulo; ?>" required />
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="noticia">Noticias:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea data-provide="summernote" data-toolbar="full" id="noticia" name="noticia" data-min-height="150"><?php echo $noticia; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?> >
                </div>
              </div>
            </div>

            <footer class="card-footer">
              <a href="noticias.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Editar Noticia</button>
              <?php $fecha = date("Y-m-d"); ?>
              <input type="hidden" name="autor" value="<?php echo $autor; ?>">
              <input type="hidden" name="fecha" value="<?php echo $fecha; ?>">
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_noticia" value="<?php echo $cod_noticia; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>