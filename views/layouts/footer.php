        <footer id="imagenNav2">
            <nav class="navbar navbar-dark" >
                <a class="navbar-brand" href="#"></a>
                <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/Escudo_Unicauca2.png" class="d-inline-block align-top mx-auto" alt="" >
                <h4 class="text-white">
                <blockquote class="blockquote mx-auto text-center"> En caso de dudas, inquietudes o problemas técnicos puede 
                comunicarse con la División de TIC. <br>
                Telefono: 3187035378 <br>
                Correo electronico: edisonm@unicauca.edu.co<br> 
                Basado en un tema original|moodle.org
                </blockquote>
            </h4> 
            <?php if (isset($_SESSION['discapacidad'])):?>
              <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/<?php echo $_SESSION['discapacidad'] == '1' ? 'catWhite.png' : 'Cat-icon.png' ?>" class="d-inline-block align-top mx-auto" alt="" >
            <?php else:?>
              <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/Cat-icon.png" class="d-inline-block align-top mx-auto" alt="" >
            <?php endif?>
            </nav>
        </footer>
    </body>
</html>