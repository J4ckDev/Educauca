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
                <div class="card-header" id="curso1">
                  <h2 class="mb-0">
                    <button class="btn btn-outline-light" type="button" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                      <h2 >TTL1</h2>
                    </button>
                  </h2>
                </div>
              </div>
                
              <div class="card">
                <div class="card-header" id="curso3">
                  <h2 class="mb-0">
                    <button class="btn btn-outline-light collapsed" type="button" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <h2 id="materia2">MediosTx</h2>
                    </button>
                  </h2>
                </div>
              </div>
              <br>
              <nav class="navbar navbar-black bg-dark">
                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar mas cursos" aria-label="Search"> 
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" id="buscar">Buscar</button>
                  </form>
                </nav>
              <br> 
      </section>

        <div class="card" style="width: 18rem;">
          <div class="card-body" style="background-color: black;" >
            <h3 class="card-title" style="color:white;" >Mis últimas insignias</h3>
            <p class="lead text-white">Aqui podras encontrar las insignias que hayas conseguido</p>
            <a href="#" class="card-link"><h3 style="color: white;">Insignias</h3></a>
          </div>
        </div>
    </div>

    <div class="col-6">
        <h2 class="display-4" style="color: white;">Temas</h2>
        <div class="card">
          <div class="card-header" id="tema1" style="width: 33.57rem; background-color: black;" >
              <h2 class="mb-0">                      
                  <button class="btn btn-link collapsed"  type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h2 style="color: white;">Scrum</h2>
                  </button>
              </h2>
          </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <a href="#" class="list-group-item list-group-item-action"><h3 class="text-ligth ">Diaposotivas Scrum</h3></a>
                  <a href="#" class="list-group-item list-group-item-action"><h3 class="text-ligth ">Taller Scrum</h3></a>
                  <a href="#" class="list-group-item list-group-item-action" ><h3 class="text-ligth ">Video Scrum</h3></a>
                </div>
              </div>
          </div>
          <div class="card" >
            <div class="card-header" id="tema2">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h2 style="color: white;">UML</h2>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                  <a href="#" class="list-group-item list-group-item-action"><h3 class="text-ligth ">Diaposotivas UML</h3></a>
                  <a href="#" class="list-group-item list-group-item-action"><h3 class="text-ligth ">Taller UML</h3></a>
                  <a href="#" class="list-group-item list-group-item-action" ><h3 class="text-ligth ">Video UML</h3></a>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="tema3">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h2 style="color: white;" href="#">Software  Architecture</h2>
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                  <a href="#" class="list-group-item list-group-item-action"><h3 class="text-ligth ">Diaposotivas Software  Architecture</h3></a>
                  <a href="#" class="list-group-item list-group-item-action"><h3 class="text-ligth">Taller Software  Architecture</h3></a>
                  <a href="#" class="list-group-item list-group-item-action" ><h3 class="text-ligth">Videos Software  Architecture</h3></a>
              </div>
            </div>
          </div>
          <div>
              <h2 class="display-4" style="color:whitesmoke;">Clase de Hoy</h2>
              
              <div class="card" style="color: white; background-color:  black;">
                <span class="border border-white"></span>
                  <p>aki va el speach del teacher</p>
                </span>
              </div>
            
          </div>
    </div>

    <div class="col">
      
      <p class="card-text">
        <h2 style="color: white;">Navegación</h2>
        <div class="accordion" id="categorias">

          <div class="card">
              <span class="border border-light"></span>
            <div class="card-header" id="PaginaPrincipal">
              <h2 class="mb-0">
                <button class="btn btn-outline-light" type="button" href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  pagina principal
                </button>
              </h2>
          </div>

          <div class="card">
            <div class="card-header" id="cursoActual">
              <h2 class="mb-0">
                <button class="btn btn-outline-light collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Curso Actual
                </button>
              </h2>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="MisCursos">
                  <div class="d-flex">
                      <div class="dropdown mr-1">
                        <button type="button" class="btn btn-outline-light dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
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
            <div class="card-body" style="background-color: black;">
              <h3 class="card-title" style="color: white;" >Actividad Reciente</h3>
              <p class="lead text-white">Aqui podras encontrar la actividad que hayas realizado recientemente</p>
              <a href="#" class="card-link" style="color: white;"><h5>Actividad Reciente</h5></a>
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