<?php
session_start();

if (empty($_SESSION["email"])) {
    header('Location:../');
}

include_once($_SERVER['DOCUMENT_ROOT'] . '/views/layouts/head.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/layouts/body.php');
?>

<section id="contenedor">

      
      <div class="container" id="containerSub">
        <div class="row">
          <div class="col">
            <section id="Adminin"><h2>Administración de sitio</h2>
                
                <div class="accordion" id="categorias">

                    <div class="card">
                        <span class="border border-light"></span>
                      <div class="card-header" id="curso1">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h2>Registro</h2>
                          </button>
                        </h2>
                      </div>
                    </div>
                      
                    <div class="card">
                      <div class="card-header" id="curso3">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h2>Usuarios</h2>
                          </button>
                        </h2>
                      </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="Restaurar">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <h2>Cuentas</h2>
                            </button>
                          </h2>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="Restaurar">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <h2>Permisos</h2>
                            </button>
                          </h2>
                        </div>
                      </div>
                    <br>
                    <nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                          <input class="form-control mr-sm-2" type="search" placeholder="Buscar mas cursos" aria-label="Search"> 
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                      </nav>
                    <br> 
            </section>

              <div class="card" style="width: 18rem;">
                <div class="card-body" >
                  <h3 class="card-title" >Informes
                  </h3>
                  <p class="lead text">Aqui podras información de los cursos</p>
                  <a href="#" class="card-link"><h5>Informacion</h5></a>
                </div>
              </div>
          </div>

          <div class="col-6">
              <h2 class="display-4">Registrar Docente</h2>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Usuario</span>
                </div>
                <input type="text" class="form-control" placeholder="Nombre del Usuario" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="correo electronico" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">@unicauca.edu.com</span>
                </div>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-outline-secondary">Categoria</button>
                  <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Ingeniería electrónica</a>
                    <a class="dropdown-item" href="#">Ingeniería de sistemas</a>
                    <a class="dropdown-item" href="#">Enfermeria</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Otra categoria</a>
                  </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
              </div>
              
              <input class="btn btn-primary" type="submit" value="Registrar">
              <input class="btn btn-primary" type="reset" value="Cancelar">
            <br>
              <div class="card">
                <div class="card-header" id="curso1" style="width: 33.75rem;">
                    <h2 class="mb-0">                      
                        <h2>Eliminar Docente</h2>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="correo electronico" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">@unicauca.edu.com</span>
                            </div>
                          </div>
                        <button type="button" class="btn btn-outline-primary">Eliminar</button>  
                    </h2>
                </div>
                <div class="card-header" id="curso1" style="width: 33.75rem;">
                    <h2 class="mb-0">                      
                        <h2>Eliminar Estudiante</h2>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="correo electronico" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">@unicauca.edu.com</span>
                            </div>
                          </div>
                        <button type="button" class="btn btn-outline-primary">Eliminar</button>  
                    </h2>
                </div> 
                </div>
                <div>
                    <h2 class="display-4">Asignar insignia</h2>
                    <div class="card-header" id="curso1" style="width: 33.75rem;">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <button type="button" class="btn btn-outline-secondary">Tipo de insignia</button>
                              <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Divisas</a>
                                <a class="dropdown-item" href="#">Distintivo</a>
                                <a class="dropdown-item" href="#">Escudo</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Otra categoria</a>
                              </div>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                          </div>
                          
                          <input class="btn btn-primary" type="submit" value="Asignar">
                    </div> 
                </div>
          </div>
    
          <div class="col">
            
            <p class="card-text">
              <h2>Navegación</h2>
              <div class="accordion" id="categorias">

                <div class="card">
                    <span class="border border-light"></span>
                  <div class="card-header" id="curso1">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        paginas del sitio
                      </button>
                    </h2>
                </div>

                <div class="card">
                  <div class="card-header" id="curso2">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        participantes
                      </button>
                    </h2>
                  </div>
                </div>

                  </div>
                  <nav class="navbar navbar-light bg-light" style="width: 13.7rem;">
                    <form class="form-inline">
                      <input class="form-control mr-sm-2" type="search" placeholder="Buscar temas" aria-label="Search"> 
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                  </nav>
                </div>
                <br>
                <div class="card" style="width: 13rem;">
                    
                  <div class="card-body">
                    <h3 class="card-title" >Actividad Reciente</h3>
                    <p class="lead text">Aqui podras encontrar la actividad que hayas realizado recientemente</p>
                    <a href="#" class="card-link"><h5>Actividad Reciente</h5></a>
                  </div>
                </div>
              </div>
              
            </p>
          </div>
          </div>
        </div>
      </div>

    </section>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/layouts/footer.php');