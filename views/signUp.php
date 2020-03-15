<?php
include_once('layouts/head.php');
include_once('layouts/body.php');
?>

<div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                     <form action="" method="GET">
                        <div class="form-group">
                        
                        <label>NOMBRES</label>
                        <input type="text" class="form-control" name="nombre" onkeypress="return soloLetras(event)">
                            
<!--                            <label>NOMBRE COMPLETO</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre completo">-->
                        </div>
                          <div class="form-group">
                            <label>APELLIDOS</label>
                            <input type="text" class="form-control" name="apellido" required>
                        </div>
                          <div class="form-group">
                            <label>EDAD</label>
                            <input type="text" class="form-control" name="edad" required>
                        </div>
                        <div class="form-group">
                            <label>CORREO ElECTRÓNICO</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>CONTRASEÑA</label>
                            <input type="password" class="form-control" name="pass" required>
                        </div>
                        <div class="form-group">
                            <label>CÓDIGO</label>
                            <input type="number" class="form-control" name="code" required>
                        </div> 

                            <input type="hidden" class="form-control" name="rol" value="3" required>

                        <div class="form-group">
                            <label>DISCAPACIDAD</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dis" id="vis" value="1">
                                <label class="form-check-label" for="vis">
                                    Visual
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="dis" id="aud" value="2">
                                <label class="form-check-label" for="aud">
                                    Auditiva
                                </label>
                            </div>
                        </div>   
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" required=""> Acordar los términos y la política.
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrarse</button>
<!--                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Registrate en facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Registrate en twitter</button>
                            </div>
                        </div>-->
                        <div class="register-link m-t-15 text-center">
                            <p>¿Ya tienes cuenta? <a href="login.php"> ir al login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php
include_once('layouts/footer.php');
?>