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
      <section id="tituloMasCursos"><h2 id="m1" onclick="square(this.id)">Más Cursos</h2>
          
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
                      <h2 id="materia2">TTL2</h2>
                    </button>
                  </h2>
                </div>
              </div>
              <br>
              <nav class="navbar navbar-black bg-dark">
                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar mas cursos" aria-label="Search"> 
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" id="buscar" onclick="square(this.id)">Buscar</button>
                  </form>
                </nav>
              <br> 
      </section>

        <div class="card" style="width: 18rem;">
          <div class="card-body" style="background-color: black;" >
            <h3 class="card-title" style="color:white;" id="ins" onclick="square(this.id)" >Mis últimas insignias</h3>
            <p class="lead text-white" id="dins" onclick="square(this.id)">Aquí podras encontrar las insignias que hayas conseguido</p>
            <a href="#" class="card-link"><h3 style="color: white;">Insignias</h3></a>
          </div>
        </div>
    </div>

    <div class="col-6">
        <h2 class="display-4" style="color: white;" id="temas" onclick="square(this.id)">Temas</h2>
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
              
              <div class="card" style="color: white; background-color:  black;" id="box">
                <span class="border border-white"></span>
                  <h1>Dipolos</h1>
                  <p>Buenos días alumno, en la clase de hoy conoceremos que son y por qué son importantes los dipolos eléctricos. 
                  Las líneas de campo eléctrico para dos cargas puntuales de igual magnitud pero de signos opuestos son conocidas como dipolo eléctrico,
                  es un sistema de dos cargas de signo opuesto e igual magnitud cercanas entre sí.
                  En este apartado encontrarás material de referencia para tu estudio. Éxitos. </p>
                </span>
              </div>
            
          </div>
    </div>

    <div class="col">
      
      <p class="card-text">
        <h2 style="color: white;" id="nav" onclick="square(this.id)">Navegación</h2>
        <div class="accordion" id="categorias">

          <div class="card">
              <span class="border border-light"></span>
            <div class="card-header" id="PaginaPrincipal">
              <h2 class="mb-0">
                <button class="btn btn-outline-light" type="button" href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <a href="homevis.php" style="color: white;">Página principal</a>
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
              <h3 class="card-title" style="color: white;" id="act" onclick="square(this.id)">Actividad Reciente</h3>
              <p class="lead text-white" id="dact" onclick="square(this.id)">Aquí podras encontrar la actividad que hayas realizado recientemente</p>
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
<style>
#box {
  background-color: black;
  color: white;
  margin: 20px;
  padding: 20px;
}
</style>
<script src="https://webreader.naturalreaders.com/nr-webreader.js" defer></script>
<script>
    window.addEventListener("DOMContentLoaded", function() {
        if (typeof NRWebReader != 'undefined') {
            window['NRWebReader'] = new NRWebReader({
            widget_id: "r8qq12ikvx",  // DO NOT REMOVE. This is your widget ID for your WebReader
            icon: {
            //    icon_name: "speaker", /*Optional: Alternative icon to show as the widget icon*/
            //    icon_position: "bottom-left", /*Optional: Position for the the widget to show up at*/
            //    icon_position_offsets: {/*Optional: Custom position offsets for the the widget to show up at*/
            //        left:""
            //        right:""
            //        top:""
            //        bottom:""
            //    }
            //    icon_color: "#0555B8", /*Optional: Color of the icon*/
            //    icon_size: {width: "60px", height: "60px"}, /*Optional: icon size. Above 50px is recommended.*/
            //    text_box: true, /*Optional: false if you don't want to have a greeting text box*/
            //    text_box_greeting: "Listen", /*Optional: Your greeting text in the text box*/
            //    text_box_background_color: "#ffffff", /*Optional: Background color of text box*/
            //    text_box_font_color: "#0555B8", /*Optional: Color of the icon*/
            //    text_box_font_size: "18px", /*Optional: Font size of the text in text box*/
            //    show_in_mobile: true, /*Optional: false if you don't want the widget to show up on mobile*/
            //    mob_icon_position: "bottom-left", /*Optional: Position for the the widget to show up at on mobile*/
            //    mob_icon_position_offsets: {/*Optional: Custom position offsets for the the widget to show up at on mobile*/
            //        left:""
            //        right:""
            //        top:""
            //        bottom:""
            //    }
            //    mob_icon_size: {width: "30px", height: "30px"}, /*Optional: icon size on mobile. Above 30px is recommended.*/
            //    mob_text_box: false /*Optional: false if you don't want to have a greeting text box on mobile*/
            },
            bar : {
            //    settings_default_voice: "Matthew *", /*Optional: Default voice for TTS*/
            //    settings_default_speed: 1, /*Optional: Default speed for TTS*/
            //    settings_highlight_colour_scheme: "dark" /*Optional: Default color scheme for highlighting text being read on page*/
            },
            custom_text_source: "#box" /*Optional: only read the text inside the HTML element with the id or class */
            });
        }
    }); 
</script> 

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/layouts/footer.php');