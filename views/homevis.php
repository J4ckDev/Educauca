<?php
session_start();

include_once('../db/queries.php');

if (empty($_SESSION["email"])) {
    header('Location:../');
}

$cursos = queries::getCourses();

include_once($_SERVER['DOCUMENT_ROOT'] . '/views/layouts/head.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/layouts/body.php');
?>

<section id="contenedor" style="background-color: black;">

      
      <div class="container">
        <div class="row">
          <div class="col" style="background-color: black;">
            <section id="tituloBienv" style="color: white;"><h2 style="display:inline;" id="bnv" onclick="square(this.id)">Bienvenidos!!</h2></section>
            
            <div class="card" style="width: 18rem; ">
              <div class="card-body" style="background-color: black;">
                <p class="card-text"><p class="lead text-white ">Docentes y Estudiantes de la Universidad del Cauca, esta plataforma es un sistema de gestión de cursos de distribución libre, 
                  que ayuda  a los educadores a crear comunidades de aprendizaje en línea, (esta plataforma se conoce también como LMS) 
                  donde se pueden publicar de manera dinámica materiales relacionados con su asignatura asignada, 
                  realizar seguimiento a los proyectos de clase y hacer evaluaciones con diferentes tipos de preguntas con calificación automática.
                  </p></p>
                <p class=" text-white" style="display:inline;" id="dd" onclick="square(this.id)"><em>
                  En caso de dudas, inquietudes, problemas técnicos o capacitaciones puede escribir al correo:<h6 style="color: whitesmoke;" style="display:inline;" id="correo" onclick="square(this.id)">aldanaj@unicauca.edu.co</h6>
                </em></p>
              </div>
             
              <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color: black; color: white;">
                  <h3 class="card-title" id="ins" onclick="square(this.id)">Mis últimas insignias</h3>
                  <p class="lead text" id="desc" onclick="square(this.id)">Aquí podras encontrar las insignias que hayas conseguido</p>
                  <a href="#" class="card-link" style="color: whitesmoke"><h5>Insignias</h5></a>
                </div>
              </div>
            </div>
          
          </div>
          <div class="col-6">
           
            <h3 class="display-4" style="color: white;" id="inf" onclick="square(this.id)">Informacion general</h3>
             <div class="card" style="width: 32rem;">
              <div class="card-body" style="background-color: black;">
                <p class="card-text"><p class="lead text-white " id="mod" onclick="square(this.id)">¿Que es moodle?
                  </p></p>
                <p class=" lead text-white"><em>
                  Moodle es una plataforma de aprendizaje de software libre basada en principios pedagógicos del constructivismo y construccionismo donde el alumno
                  responde de su propio aprendizajey el tutor deja de ser el transmisor de conocimientos para convertirse en el guía del alumno, dentro de un entorno que facilita la comunicación entre todos los participantes
                </em></p>
                <p class="card-text"><p class="lead text-white " id="demo" onclick="square(this.id)">Características de Moodle</p>
                <em>
                <ul class=" lead text-white">
                  <li class=" lead text-white">software libre</li>
                  <li>Soporte técnico</li>
                  <li>Uso intuitivo</li>
                  <li>Flexible y personalizable</li>
                </ul>
              </em>
              <p class="card-text"><p class="lead text-white " id="mod1" onclick="square(this.id)">¿Cómo funciona moodle?
              </p></p>
            <p class=" lead text-white"><em>
              Moodle se basa en contenidos que montan en un servidor web, esto hace posible que los estudiantes puedan ingresar en todo momento para revisar los cursos en los que están inscritos.
              <br> Moodle está programado sobre PHP, un lenguaje de programación, por esta razón el servidor deber ser compatible con dicha tecnología.
            </em></p>
              </div>
            </div>
            <br>
            <div class="shadow-lg p-3 mb-5 bg-dark rounded">
            <h1 class="display-4" style="color: white;" id="ctg" onclick="square(this.id)">Categorías</h1>
              <section id= "cursosCate" class="list-group" style="background-color: black;">
              <a  class="list-group-item list-group-item-action" style="background-color: black;" ><h3 class="text-white " style="display:inline;" id="ing" onclick="square(this.id)">Ingeniería electrónica y telecomunicaciones</h3></a>
              <a  class="list-group-item list-group-item-action" style="background-color: black;"><h3 class="text-white " style="display:inline;" id="sis" onclick="square(this.id)">Ingeniería de sistemas</h3></a>
              <a  class="list-group-item list-group-item-action" style="background-color: black;"><h3 class="text-white " style="display:inline;" id="enf" onclick="square(this.id)">Enfermería</h3></a>
            </section>
            
            </div>
            
          </div>
          <div class="col">
            
            <p class="card-text">
              <h2 class="text-white " id="Cursos" onclick="square(this.id)">Cursos</h2>
              <div class="accordion" id="categorias">
              <?php foreach ($cursos as $pos => $curso) {?>
                <div class="card" >
                  <div class="card-header" id="curso<?php echo $pos; ?>" style="background-color: black;">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <a class="text-white " id="<?php echo $curso['id']; ?>" onclick="square(this.id)"><?php echo $curso['name'];?></a>
                      </button>
                    </h2>
                  </div>
                </div>
              <?php  }?>
              </div>
              <br><br>
                  <div class="card" style="width: 13rem;">
                    <div class="card-body" style="background-color: black; color: white;">
                      <h3 class="card-title" id="act" onclick="square(this.id)">Actividad Reciente</h3>
                      <p class="lead text" id="adesc" onclick="square(this.id)">Aquí podras encontrar la actividad que hayas realizado recientemente</p>
                      <a href="#" class="card-link" style="color: whitesmoke"><h5>Actividad Reciente</h5></a>
                      <a href="#" class="card-link" style="color: whitesmoke;"> <h5>Mis cursos</h5></a>
                    </div>
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
