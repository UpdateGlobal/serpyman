<?php include ("module/conexion.php"); ?>
<?php include ("module/verificar.php"); ?>
<?php 
$cod_categoria = $_REQUEST['cod_categoria'];
$eliminar = "DELETE FROM galerias_categorias WHERE cod_categoria='$cod_categoria'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:galeria-categorias.php");
?>