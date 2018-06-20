<?php
$toEmail = "raulupdate@gmail.com";
$subject = "Enviado desde Serpyman - Contacto";
$mailHeaders = 'From: '.$_POST["email"]."\r\n".
'Reply-To: '.$_POST["email"]."\r\n" .
'X-Mailer: PHP/' . phpversion();

$nombres = isset( $_POST['nombres'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['nombres'] ) : "";
$apellidos = isset( $_POST['apellidos'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['apellidos'] ) : "";
$email = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$telefono = isset( $_POST['telefono'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['telefono'] ) : "";
$comentarios = isset( $_POST['mensaje'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['mensaje'] ) : "";

$mensaje = "Información del Contacto\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres	: ".filter_var($nombres, FILTER_SANITIZE_STRING)."\n";
$mensaje .= "Apellidos	: ".filter_var($apellidos, FILTER_SANITIZE_STRING)."\n";
$mensaje .= "Email		: ".filter_var($email, FILTER_VALIDATE_EMAIL)."\n";
$mensaje .= "Telefono	: ".filter_var($telefono, FILTER_SANITIZE_STRING)."\n";
$mensaje .= "Mensaje	: ".filter_var($comentarios, FILTER_SANITIZE_STRING)."\n";

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert alert-success' role='alert'>Email Enviado Exitosamente.</div>";
} else {
	print "<div class='alert alert-danger' role='alert'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>