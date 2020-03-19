<?php session_start();

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
            <section id="tituloMasCursos"><h2>Mas Cursos</h2>
                
                <div class="accordion" id="categorias">

                    <div class="card">
                        <span class="border border-light"></span>
                      <div class="card-header" id="curso1">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h2>TTL1</h2>
                          </button>
                        </h2>
                      </div>
                    </div>
                      
                    <div class="card">
                      <div class="card-header" id="curso3">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h2>MediosTx</h2>
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
                  <h3 class="card-title" >Mis últimas insignias</h3>
                  <p class="lead text">Aqui podras encontrar las insignias que hayas conseguido</p>
                  <a href="#" class="card-link"><h5>Insignias</h5></a>
                </div>
              </div>
          </div>

          <div class="col-6">
              <h2 class="display-4">Temas</h2>
              <div class="card">
                <div class="card-header" id="curso1" style="width: 32rem;">
                    <h2 class="mb-0">                      
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h2>Scrum</h2>
                        </button>
                    </h2>
                </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="#" class="list-group-item list-group-item-action"><h5 class="text-primary ">Diaposotivas Scrum</h5></a>
                        <a href="#" class="list-group-item list-group-item-action"><h5 class="text-primary ">Taller Scrum</h5></a>
                        <a href="#" class="list-group-item list-group-item-action" ><h5 class="text-primary ">Video Scrum</h5></a>
                      </div>
                    </div>
                </div>
                <div class="card">
                  <div class="card-header" id="curso2">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h2>UML</h2>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <a href="#" class="list-group-item list-group-item-action"><h5 class="text-primary ">Diaposotivas UML</h5></a>
                        <a href="#" class="list-group-item list-group-item-action"><h5 class="text-primary ">Taller UML</h5></a>
                        <a href="#" class="list-group-item list-group-item-action" ><h5 class="text-primary ">Video UML</h5></a>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header" id="curso3">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h2 href="#">Software  Architecture</h2>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <a href="#" class="list-group-item list-group-item-action"><h5 class="text-primary ">Diaposotivas Software  Architecture</h5></a>
                        <a href="#" class="list-group-item list-group-item-action"><h5 class="text-primary ">Taller Software  Architecture</h5></a>
                        <a href="#" class="list-group-item list-group-item-action" ><h5 class="text-primary ">Videos Software  Architecture</h5></a>
                    </div>
                  </div>
                </div>
                <div>
                    <h2 class="display-4">Clase de Hoy</h2>
                    <div class="card">
                        <p>aki va el speach del teacher</p>
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
                        pagina principal
                      </button>
                    </h2>
                </div>

                <div class="card">
                  <div class="card-header" id="curso2">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Curso Actual
                      </button>
                    </h2>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header" id="MisCursos">
                        <div class="d-flex">
                            <div class="dropdown mr-1">
                              <button type="button" class="btn btn-outline-primary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                Mis cursos
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                <a class="dropdown-item" href="#">TTL1</a>
                                <a class="dropdown-item" href="#">Enfasis II</a>
                                <a class="dropdown-item" href="#">MediosTX</a>
                              </div>
                            </div>
                            </div>
                          </div>
                  </div>
                  
                  </div>
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