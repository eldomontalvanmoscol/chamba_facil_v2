
<!-- Popup Registro -->
<div class="modal fade" id="pop-postulante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Postulante</h4>
            </div>
            <div class="modal-body">

                <!-------->


                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">Iniciar Sesión</a></li>
                    <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">Registrarte</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">





                        <!--<form role="form" action=""  class="tab-pane" method="post">-->

                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo Electronico:</label>
                                <input name="email" type="text" class="form-control login-field" value="" placeholder="Ingresa tu correo" id="login-name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña:</label>
                                <input name="password" type="password" class="form-control login-field" value="" placeholder="Contraseña" id="login-pass">
                                <input type="hidden" name="pass" value=""/>
                            </div>


                            <a href="#">¿Olvidaste tu contraseña?</a>
                            <div class="modal-footer">
                                <input type="submit" id="logeo" name="iniciar" class="btn btn-info" value="Iniciar"/>
                            </div>

                        <!--</form>-->




                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile"> 


                        <!--<form role="form" action="popup_empresa.php" method="post">-->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo Electronico:</label>
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Correo Electronico" tabindex="4" required>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contraseña:</label>
                                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" tabindex="5" required>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Repetir Contraseña:</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Repetir contraseña" tabindex="6" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <span class="button-checkbox">
                                        <label class="checkbox" for="checkbox1">
                                            <input type="checkbox" value=""  tabindex="7" id="checkbox1" data-toggle="checkbox" class="custom-checkbox" required><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
                                            Acepto los <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terminos y condiciones</a> de este sitio, incluido el uso de cookies.
                                        </label>
                                        <div class="modal-footer">
                                            <button id="registrar" type="submit"  name="Register" value="Register" class="btn btn-primary" tabindex="7">Registrarse</button>
                                        </div>

                                    </span>
                                </div>
                            </div>

                        <!--</form>-->  

                    </div>
                </div>                   

            </div>

        </div>
    </div>
</div>
