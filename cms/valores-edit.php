<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_valores  = $_REQUEST['cod_valores'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso==""){
  $consultaCon = "SELECT * FROM valores WHERE cod_valores='$cod_valores'";
  $ejecutarCon = mysqli_query($enlaces,$consultaCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaCon = mysqli_fetch_array($ejecutarCon);
    $cod_valores    = $filaCon['cod_valores'];
    $titulo_valores = $filaCon['titulo_valores'];
    $icono          = $filaCon['icono'];
    $orden          = $filaCon['orden'];
    $estado         = $filaCon['estado'];
}

if($proceso == "Actualizar"){
  $cod_valores    = $_POST['cod_valores'];
  $titulo_valores = mysqli_real_escape_string($enlaces, $_POST['titulo_valores']);
  $icono          = $_POST['icono'];
  $orden          = $_POST['orden'];
  $estado         = $_POST['estado'];

  $ActualizarCon = "UPDATE valores SET cod_valores='$cod_valores', titulo_valores='$titulo_valores', icono='$icono', orden='$orden', estado='$estado' WHERE cod_valores='$cod_valores'";
  $resultadoActualizar = mysqli_query($enlaces,$ActualizarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
  header("Location:nosotros.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
    function Validar(){
      if(document.fcms.titulo_valores.value==""){
        alert("Debe escribir un título");
        document.fcms.titulo_valores.focus();
        return;
      }
      
      document.fcms.action = "valores-edit.php";
      document.fcms.proceso.value="Actualizar";
      document.fcms.submit();
    }
    function Imagen(codigo){
      url = "agregar-foto.php?id=" + codigo;
      AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
    }
    </script>
    <script src="assets/js/visitante-alert.js"></script>
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
    <?php $menu="nosotros"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Valores</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Editar Valores</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="icono">&Iacute;cono:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><?php echo $icono; ?><?php } ?>
                  <select class="form-control" id="icono" name="icono" <?php if($xVisitante=="1"){ ?> style="display:none" <?php }else{ ?> <?php } ?>>                    
                    <option value="<?php echo $icono; ?>"><?php if($icono==1){ echo "Casa"; } if($icono==2){ echo "Grupo"; } if($icono==3){ echo "Lista"; } ?><?php if($icono==4){ echo "Persona"; } ?> (Actual)</option>
                    <option value="1">Casa</option>
                    <option value="2">Grupo</option>
                    <option value="3">Lista</option>
                    <option value="4">Persona</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label require" for="titulo_valores">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $titulo_valores; ?></p><?php } ?>
                  <input class="form-control" type="text" id="titulo_valores" name="titulo_valores" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $titulo_valores; ?>" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-2 col-lg-1">
                  <input class="form-control" name="orden" type="text" id="orden" value="<?php echo $orden; ?>" onKeyPress="return soloNumeros(event)" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="description">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php if($estado=="1"){ echo "[Activo]";}else{ echo "[Inactivo]"; } ?></p><?php }else{ ?>
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
                  <?php } ?>
                </div>
              </div>

            </div>
            <footer class="card-footer">
              <a href="nosotros.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_valores" value="<?php echo $cod_valores; ?>">
            </footer>
          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>