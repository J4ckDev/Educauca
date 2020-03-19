<section id="main">
    <div class=".container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <blockquote class="blockquote text-center">
                    <br>
                    <br>
                    <h1 class="display-4">Acceder</h1>
                    <form action="https://<?php echo $_SERVER['SERVER_NAME']; ?>/controllers/sesions.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo electronico: </label>
                            <input  type="email"  id="exampleInputEmail1" placeholder="e-mail" name="username" aria-describedby="Search">
                            <small id="emailHelp" class="form-text text-muted">Tu correo electronico no sera compartido con nadie.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña: </label>
                            <input type="password"  placeholder="Contraseña" name="pwd" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recordar nombre de usuario</label>
                        </div>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: black; border-color: black;" id="butonNav">Ingresar</button>
                        </form> 
                    </blockquote>
                </div>
        
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">                  
                    <div class="jumbotron">
                        <h1 class="display-4">Registrarse como usuario</h1>
                        <p class="lead">Hola. Para acceder al sistema, tómese un minuto para crear una cuenta. Cada curso puede disponer de una "clave de acceso" que sólo tendrá que usar la primera vez. Estos son los pasos:</p>
                        <hr class="my-4">
                        <p> 1. Rellene el Formulario de Registro con sus datos.<br>
                            2. El sistema le enviará un correo para verificar que su dirección sea correcta.<br>
                            3. Lea el correo y confirme su matrícula.<br>
                            4. Su registro será confirmado y usted podrá acceder al curso.<br>
                            5. Seleccione el curso en el que desea participar.<br>
                            6. Si algún curso en particular le solicita una "contraseña de acceso" utilice la que le &nbsp;&nbsp;facilitaron cuando se matriculó.<br>
                               &nbsp; Así quedará matriculado.<br>
                            7. A partir de ese momento no necesitará utilizar más que su nombre de usuario y &nbsp;&nbsp;contraseña en el formulario de la página para entrar a cualquier curso en el que &nbsp;&nbsp;esté matriculado</p>
                        <a class="btn btn-primary btn-lg" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/?dir=1" role="button">Crear nueva cuenta</a>
                    </div>
                </div>
            </div>
        </div>
</section>