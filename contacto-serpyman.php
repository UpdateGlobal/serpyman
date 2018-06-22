<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('modulo/head.php'); ?>
</head>
<body>
<div class="page-wrapper">

    <?php include('modulo/menu.php'); ?>    
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(img/serpyman_head.png);">
        <div class="auto-container text-right">
            <h1>Serpyman / Contactanos</h1>
            <ul class="bread-crumb"><li><a href="index.php">Home</a></li> <li>Contactanos</li></ul>
        </div>
    </section>
    <!-- Page Banner -->
    <!--Contact Us Area-->
    <section class="contact-us-area">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<div class="col-md-6 col-sm-12 col-xs-12 contact-form wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                	<div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <h2>Contac<span>tanos</span></h2>
                    </div>
                    <div id="contact-form">
                        <div class="field-container clearfix">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            	<input type="text" id="nombre" name="nombre" value="" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            	<input type="text" id="apellidos" name="apellidos" value="" placeholder="Apellidos">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            	<input type="text" id="telefono" name="telefono" value="" placeholder="Telefono">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <input type="email" id="email" name="email" value="" placeholder="Correo">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            	<textarea name="Mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                <div id="mail-status"></div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            	<button name="submit" onClick="sendContact();" class="primary-btn hvr-bounce-to-left"><span class="btn-text">Enviar Mensaje</span> <strong class="icon"><span class="f-icon flaticon-letter110"></span></strong></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 contact-form wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <h2>Mas<span> Contacto</span></h2>
                    </div>
                    <div class="project-info">
                        <?php
                            $consultarCot = 'SELECT * FROM contacto';
                            $resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
                            $filaCot  = mysqli_fetch_array($resultadoCot);
                                $xDirection   = $filaCot['direction'];
                                $xPhone       = $filaCot['phone'];
                                $xEmail       = $filaCot['email'];
                                $xMap         = $filaCot['map'];
                        ?>
                        <ul class="clearfix">
                            <li><i class="fas fa-map-marker-alt" style="color:#000;"></i> <strong>Direcci&oacute;n:</strong> <?php echo $xDirection; ?></li>
                            <li><i class="fas fa-mobile-alt" style="color:#000;"></i> <strong>Tel&eacute;fonos:</strong> <?php echo $xPhone; ?></li>
                            <li><i class="fas fa-envelope" style="color:#000;"></i> <strong>Correo:</strong> <?php echo $xEmail; ?></li>
                        </ul>
                    </div>
                </div>
                <?php echo $xMap; ?>
            </div>
        </div>
    </section>
    <!--Contact Us Area-->
    <?php include('modulo/footer.php'); ?>
</div>
<script>
    function sendContact(){
        var valid;
        valid = validateContact();
        if(valid) {
            jQuery.ajax({
                url: "contact_form.php",
                data:'nombre='+$("#nombre").val()+'apellidos='+$("#apellidos").val()+'&email='+$("#email").val()+'&telefono='+$("#telefono").val()+'&mensaje='+$("#mensaje").val(),
                type: "POST",
                success:function(data){
                    $("#mail-status").html(data);
                },
                error:function (){}
            });
        }
    }
    function validateContact() {
        var valid = true;
        if(!$("#nombre").val()) {
            $("#nombre").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#apellidos").val()) {
            $("#apellidos").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#email").val()) {
            $("#email").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#email").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#telefono").val()) {
            $("#telefono").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#mensaje").val()) {
            $("#mensaje").css('background-color','#f28282');
            valid = false;
        }
        return valid;
    }
</script>
</body>
</html>