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
                     <form action="controlador/usuario.php" method="POST">
                        <div class="form-group">
                            

                        <label>NOMBRE COMPLETO</label>
                        <input type="text" class="form-control" name="nombre" onkeypress="return soloLetras(event)">
                            
<!--                            <label>NOMBRE COMPLETO</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre completo">-->
                        </div>
                          <div class="form-group">
                            <label>GENERO</label>
                            <input type="text" class="form-control" name="apellido" placeholder="Genero" required="">
                        </div>
                          <div class="form-group">
                            <label>USUARIO</label>
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="">
                        </div>
                        <div class="form-group">
                            <label>CORREO</label>
                            <input type="email" class="form-control" name="email" placeholder="Correo" required="">
                        </div>
                        <div class="form-group">
                            <label>CONTRASEÑA</label>
                            <input type="password" id="pass1" class="form-control" name="pass" placeholder="Contraseña" required="">
                        </div>
                          <div class="form-group">
                            <label>CONFIRMAR CONTRASEÑA</label>
                            <input type="password" id="pass2" class="form-control"  placeholder="Confirmar contraseña" required="">
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