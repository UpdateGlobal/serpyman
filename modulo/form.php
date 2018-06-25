                <br><br>
                <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <h2>Contac<span>tanos</span></h2>
                    <br><br>
                    <p>Bríndanos tus datos y te contactarenos a la brevedad posible.</p>
                </div>
                <div>
                    <div class="form_group col-md-6 col-sm-12 col-xs-12">
                        <input type="text" id="nombre" name="nombre" value="" placeholder="Nombre">
                    </div>
                     <div class="form_group col-md-6 col-sm-12 col-xs-12">
                        <input type="text" id="apellidos" name="apellidos" value="" placeholder="Apellidos">
                    </div>
                     <div class="form_group col-md-6 col-sm-12 col-xs-12">
                        <input type="text" id="telefono" name="telefono" value="" placeholder="Telefono">
                    </div>
                     <div class="form_group col-md-6 col-sm-12 col-xs-12">
                        <input type="text" id="email" name="email" value="" placeholder="Correo">
                    </div>
                    <div class="form_group col-md-12 col-sm-12 col-xs-12">
                        <textarea id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 co-xs-12">
                        <div id="mail-status"></div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" name="submit-form" onClick="sendContact();" class="primary-btn hvr-bounce-to-left"><span class="btn-text">Enviar Mensaje</span> <strong class="icon"><span class="f-icon flaticon-letter110"></span></strong></button>
                    </div>
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