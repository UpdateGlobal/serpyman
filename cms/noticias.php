<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$num = ""; 
if (isset($_REQUEST['eliminar'])) {
  $eliminar = $_POST['eliminar'];
} else {
  $eliminar = "";
}
if ($eliminar == "true") {
  $sqlEliminar = "SELECT cod_noticia FROM noticias ORDER BY fecha";
  $sqlResultado = mysqli_query($enlaces,$sqlEliminar);
  $x = 0;
  while($filaElim = mysqli_fetch_array($sqlResultado)){
    $id_noticia = $filaElim["cod_noticia"];
    if ($_REQUEST["chk" . $id_noticia] == "on") {
      $x++;
      if ($x == 1) {
          $sql = "DELETE FROM noticias WHERE cod_noticia=$id_noticia";
        } else { 
          $sql = $sql . " OR cod_noticia=$id_noticia";
        }
    }
  }
  mysqli_free_result($sqlResultado);
  if ($x > 0) { 
    $rs = mysqli_query($enlaces,$sql);
  }
  header ("Location:noticias.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <style>
      @media only screen and (max-width: 760px), (min-device-width: 768px) and (max-device-width: 1024px)  {
        td:nth-of-type(1):before { content: "Imagen"; }
        td:nth-of-type(2):before { content: "Categoría"; }
        td:nth-of-type(3):before { content: "Título"; }
        td:nth-of-type(4):before { content: "Orden"; }
        td:nth-of-type(5):before { content: "Estado"; }
        td:nth-of-type(6):before { content: ""; }
        td:nth-of-type(7):before { content: ""; }
        td:nth-of-type(8):before { content: ""; }
      }
    </style>
    <script>
      function Procedimiento(proceso,seccion){
        document.fcms.proceso.value = "";
        estado = 0;
        for (i = 0; i < document.fcms.length; i++)
        if(document.fcms.elements[i].name.substring(0,3) == "chk"){
          if(document.fcms.elements[i].checked == true){
            estado = 1
          }
        }
        if (estado == 0) {
          if (seccion == "N"){
            alert("Debes de seleccionar un noticia.")
          }
          return
        }
        procedimiento = "document.fcms." + proceso + ".value = true"
        eval(procedimiento)
        document.fcms.submit()
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
        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Lista de Noticias</strong></h4>
              <div class="card-body">
                <a class="btn btn-info" href="<?php if($xVisitante=="0"){ ?>noticias-nuevo.php<?php }else{ ?>javascript:visitante();<?php } ?>"><i class="fa fa-plus"></i> A&ntilde;adir nuevo</a>
                <hr>
                <form name="fcms" method="post" action="">
                  <table class="table" data-provide="datatables">
                    <thead>
                      <tr>
                        <th width="20%" scope="col">Imagen
                          <input type="hidden" name="proceso">
                          <input type="hidden" name="eliminar" value="false">
                        </th>
                        <th width="20%" scope="col">T&iacute;tulo</th>
                        <th width="20%" scope="col">Categor&iacute;a</th>
                        <th width="15%" scope="col">Fecha</th>
                        <th width="10%" scope="col">Estado</th>
                        <th width="5%" scope="col">&nbsp;</th>
                        <th width="5%" scope="col">&nbsp;</th>
                        <th width="5%" scope="col"><a href="javascript:Procedimiento('eliminar','N');"><img src="assets/img/borrar.png" width="18" height="25" alt="Borrar"></a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $consultarNoticias = "SELECT cn.cod_categoria, cn.categoria, n.* FROM noticias_categorias as cn, noticias as n WHERE n.cod_categoria=cn.cod_categoria ORDER BY fecha";
                        $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        while($filaNot = mysqli_fetch_array($resultadoNoticias)){
                          $xCodigo    = $filaNot['cod_noticia'];
                          $xTitulo    = $filaNot['titulo'];
                          $xImagen    = $filaNot['imagen'];
                          $xCategoria = $filaNot['categoria'];
                          $xFecha     = $filaNot['fecha'];
                          $xEstado    = $filaNot['estado'];
                      ?>
                      <tr>
                        <td><?php if($xImagen!=""){?><img class="d-block b-1 border-light hover-shadow-2 p-1" src="assets/img/noticias/<?php echo $xImagen; ?>" /><?php }else{ ?> <?php } ?></td>
                        <td><?php echo $xTitulo; ?></td>
                        <td><?php echo $xCategoria; ?></td>
                        <td><?php echo $xFecha; ?></td>
                        <td><strong>
                          <?php if($xEstado=="1"){ echo "[Activo]"; }else{ echo "[Inactivo]";} ?>
                          </strong></td>
                        <td><a class="boton-eliminar <?php if($xVisitante=="1"){ ?>boton-eliminar-bloqueado<?php } ?>" href="<?php if($xVisitante=="0"){ ?>noticias-delete.php?cod_noticia=<?php echo $xCodigo; ?><?php }else{ ?>javascript:visitante();<?php } ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                        <td><a class="boton-editar" href="noticias-edit.php?cod_noticia=<?php echo $xCodigo; ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
                        <td>
                          <?php if($xVisitante=="0"){ ?>
                          <div class="hidden">
                            <label class="custom-control custom-control-lg custom-checkbox" for="chkbx-<?php echo $xCodigo; ?>">
                              <input type="checkbox" class="custom-control-input" id="chkbx-<?php echo $xCodigo; ?>" name="chk<?php echo $xCodigo; ?>" />
                              <span class="custom-control-indicator"></span>
                            </label>
                          </div>
                          <?php } ?>
                        </td>
                      </tr>
                      <?php
                        }
                        mysqli_free_result($resultadoNoticias);
                      ?>
                    </tbody>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>