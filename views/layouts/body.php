<body>
    <section id="barranav">
        <section id="imagenNav">
            <nav class="navbar navbar-dark">
            <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/Escudo_Unicauca2.png" class="d-inline-block align-top" alt="" >
            <h1 class="text-white">EduCauca| <small class="text-muted">Universidad del Cauca</small></h1> 
            <?php if (isset($_SESSION['discapacidad'])):?>
              <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/<?php echo $_SESSION['discapacidad'] == '1' ? 'catWhite.png' : 'Cat-icon.png' ?>" class="d-inline-block align-top" alt="" >
            <?php else:?>
              <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/Cat-icon.png" class="d-inline-block align-top" alt="" >
            <?php endif?>
            
            </nav>
        </section >
        <?php if (empty($_SESSION['email'])):?>
          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #acbddd;">
            <a class="navbar-brand" href="#">
              <?php if (isset($_SESSION['discapacidad'])):?>
                <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/<?php echo $_SESSION['discapacidad'] == '1' ? 'catWhite.png' : 'Cat-icon.png' ?>" class="d-inline-block align-top" alt="" style="width: 50px;">
              <?php else:?>
                <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/Cat-icon.png" class="d-inline-block align-top" alt="" style="width: 50px;">
              <?php endif?>
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
        <?php elseif (isset($_SESSION['discapacidad'])): ?>
          <?php if ($_SESSION['discapacidad']=='1'):?>
          <nav  id="barraBus" class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand">
              <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/catWhite.png" style="width: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="contenidoBarra2">
              <ul class="navbar-nav mr-auto">
                <form class="form-inline">
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><h1 class="text-white">Educación, Inclusión y TIC</h1> </a>
                  </li>
                  &nbsp;&nbsp;
                  <li class="nav-item text-white">
                    <button class="btn  btn-outline-dark my-4 my-sm-4 text-white" type="submit"><h4>Ver perfil</h4></button>
                  </li>
                  &nbsp;&nbsp;
                  <li>
                    <button class="btn btn-outline-dark my-2 my-sm-4 text-white" type="submit"><h4>Editar perfil</h4></button>
                  </li>
                  &nbsp;&nbsp;
                  <li>
                    <button class="btn btn-outline-dark my-2 my-sm-4 text-white" type="submit"><h4>Salir</h4></button>
                  </li>
                  &nbsp;
                  &nbsp;
                  &nbsp;
                  &nbsp;
                  <li>              
                    <input class="form-control mr-sm-4" type="search" placeholder="Nombre del Curso" aria-label="Search">
                    <button class="btn btn-outline-dark my-4 my-sm-4 text-white" type="submit"><h4>Buscar</h4></button>
                </form>
                </li>
              </ul>      
            </div>
          </nav>
          <?php else:?>
            <nav  id="barraBus" class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand">
              <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/Cat-icon.png" style="width: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="contenidoBarra2">
              <ul class="navbar-nav mr-auto">
                <form class="form-inline">
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><h1 class="text-dark">Educación, Inclusión y TIC</h1> </a>
                  </li>
                  &nbsp;&nbsp;
                  <li class="nav-item text-white">
                    <button class="btn  btn-outline-primary my-4 my-sm-4 text-dark" type="submit"><h4>Ver perfil</h4></button>
                  </li>
                  &nbsp;&nbsp;
                  <li>
                    <button class="btn btn-outline-primary my-2 my-sm-4 text-dark" type="submit"><h4>Editar perfil</h4></button>
                  </li>
                  &nbsp;&nbsp;
                  <li>
                    <button class="btn btn-outline-primary my-2 my-sm-4 text-dark" type="submit"><h4>Salir</h4></button>
                  </li>
                  &nbsp;
                  &nbsp;
                  &nbsp;
                  &nbsp;
                  <li>              
                    <input class="form-control mr-sm-4" type="search" placeholder="Nombre del Curso" aria-label="Search">
                    <button class="btn btn-outline-primary my-1 my-sm-1 color: text-dark" type="submit"><h4>Buscar</h4></button>
                </form>
                </li>
              </ul>      
            </div>
          </nav>
          <?php endif;?>
        <?php endif;?> 
    </section>