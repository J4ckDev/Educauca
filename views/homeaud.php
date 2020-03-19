<?php
session_start();

if (empty($_SESSION["email"])) {
    header('Location:../');
}

include_once($_SERVER['DOCUMENT_ROOT'] . '/views/layouts/head.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/layouts/body.php');
?>

<section id="contenedor" style="background-color: rgb(218, 237, 245);">

      
<div class="container" style= " width: 1440px; ">
  <div class="row">
    <div class="col">
      <section id="tituloBienv"><h2>Bienvenidos!!</h2></section>
      <div class="card" style="width: 18rem; ">
        <div class="card-body">
          <p class="card-text"><p class="lead text-dark ">Docentes y Estudiantes de la Universidad del Cauca, esta plataforma es un sistema de gestión de cursos de distribución libre, 
            que ayuda  a los educadores a crear comunidades de aprendizaje en línea, (esta plataforma se conoce también como LMS) 
            donde se pueden publicar de manera dinámica materiales relacionados con su asignatura asignada, 
            realizar seguimiento a los proyectos de clase y hacer evaluaciones con diferentes tipos de preguntas con calificación automática.
            </p></p>
          <p class=" text-dark"><em>
            En caso de dudas, inquietudes, problemas técnicos o capacitaciones puede escribir al correo:<h6 style="color: black;">aldanaj@unicauca.edu.co</h6>
          </em></p>
        </div>
       
        <div class="card" style="width: 18rem;">
          <div class="card-body" >
            <h3 class="card-title" >Mis últimas insignias</h3>
            <p class="lead text">Aqui podras encontrar las insignias que hayas conseguido</p>
            <a href="#" class="card-link"><h5>Insignias</h5></a>
          </div>
        </div>
      </div>
    
    </div>
    <div class="col-6">
     
      <h3 class="display-4">Informacion general</h3>
      <div class="card" style="width: 32rem;">
        <div class="card-body">
          <p class="card-text"><p class="lead text-dark ">¿Que es moodle?
            </p></p>
          <p class=" lead text-dark"><em>
            Moodle es una plataforma de aprendizaje de software libre basada en principios pedagógicos del constructivismo y construccionismo donde el alumno
            responde de su propio aprendizajey el tutor deja de ser el transmisor de conocimientos para convertirse en el guía del alumno, dentro de un entorno que facilita la comunicación entre todos los participantes
          </em></p>
          <p class="card-text"><p class="lead text-dark ">Características de Moodle</p>
          <em>
          <ul class=" lead text-dark">
            <li class=" lead text-dark">software libre</li>
            <li>Soporte técnico</li>
            <li>Uso intuitivo</li>
            <li>Flexible y personalizable</li>
          </ul>
        </em>
        <p class="card-text"><p class="lead text-dark ">¿Cómo funciona moodle?
        </p></p>
      <p class=" lead text-dark"><em>
        Moodle se basa en contenidos que montan en un servidor web, esto hace posible que los estudiantes puedan ingresar en todo momento para revisar los cursos en los que están inscritos.
        <br> Moodle está programado sobre PHP, un lenguaje de programación, por esta razón el servidor deber ser compatible con dicha tecnología.
      </em></p>
        </div>
      </div>
      <br>
      <div class="shadow-lg p-3 mb-5 bg-ligth rounded">
      <h1 class="display-4">Categorías</h1>
        <section id= "cursosCate" class="list-group">
        <a href="#" class="list-group-item list-group-item-action"><h5 class="text-primary ">Ingenieria electronica y telecomunicaciones</h5></a>
        <a href="#" class="list-group-item list-group-item-action"><h5 class="text-primary ">Ingenieria de sistemas</h5></a>
        <a href="#" class="list-group-item list-group-item-action" ><h5 class="text-primary ">Enfermeria</h5></a>
      </section>
      
      </div>
      
    </div>
    <div class="col">
      
      <p class="card-text">
        <h2>Cursos</h2>
        <div class="accordion" id="categorias">

          <div class="card">
              <span class="border border-light"></span>
            <div class="card-header" id="curso1">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h2>TTL1</h2>
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <h3>Breve descripcion del curso TTL1</h3>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="curso2">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h2>Enfasis II</h2>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <h3>Breve descripcion del curso 2</h3>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="curso3">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h2>MediosTx</h2>
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <h3>Breve descripcion del curso 3</h3>
              </div>
            </div>
          </div>
          <br>
          <div class="card" style="width: 13rem;">
            <div class="card-body">
              <h3 class="card-title" >Actividad Reciente</h3>
              <p class="lead text">Aqui podras encontrar la actividad que hayas realizado recientemente</p>
              <a href="#" class="card-link"><h5>Actividad Reciente</h5></a>
              <a href="#" class="card-link"> <h5>Mis cursos</h5></a>
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
