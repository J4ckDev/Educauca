<body>
    <section id="barranav">
        <section id="imagenNav">
            <nav class="navbar navbar-dark">
            <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/Escudo_Unicauca2.png" class="d-inline-block align-top" alt="" >
            <h1 class="text-white">EduCauca| <small class="text-muted">Universidad del Cauca</small></h1> 
            <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/Cat-icon.png" class="d-inline-block align-top" alt="" >
            </nav>
        </section id="barraBus">
        <?php if (empty($_SESSION['email'])):?>
          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #acbddd;">
            <a class="navbar-brand" href="#">
                <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/Cat-icon.png" style="width: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                
                
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><h3 class="text-dark">Educación, Inclusión y TIC</h3> </a>
                </li>
              </ul>
              <form id="formNav" class="form-inline my-2 my-lg-0" action="https://<?php echo $_SERVER['SERVER_NAME']; ?>/controllers/sesions.php" method="POST">
                  <div class="form-group">
                      <input class="form-control mr-sm-2" type="email" placeholder="e-mail" name="username" aria-label="Search">
                      <input type="password" class="form-control mr-2" placeholder="Contraseña" name="pwd" id="exampleInputPassword1">
                  </div>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: black; border-color: black;" id="butonNav">Ingresar</button>
              </form>
            </div>
          </nav>
        <?php endif;?> 
    </section>