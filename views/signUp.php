<div class="container">
    <div class="login-content">
        <div class="login-form">
            <form action="https://<?php echo $_SERVER['SERVER_NAME']; ?>/controllers/sesions.php" method="POST">
                <div class="form-group">                        
                    <label>NOMBRES</label>
                    <input type="text" class="form-control" name="nombre" onkeypress="return soloLetras(event)">
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
                        <input type="checkbox" required> Acordar los términos y la política.
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrarse</button>
                <div class="register-link m-t-15 text-center">
                    <p>¿Ya tienes cuenta? <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>"> ir al login</a></p>
                </div>
            </form>
        </div>
    </div>
</div>