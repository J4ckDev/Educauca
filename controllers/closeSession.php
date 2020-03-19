                                                       
<?php

// PROGRAMA DE FINALIZACION DE SESION            
  session_start();
  unset($_SESSION['apellidos']); 
  unset($_SESSION['edad']);
  unset($_SESSION['rol']);
  unset($_SESSION['codigo']);
  unset($_SESSION['email']);
  unset($_SESSION['nombres']); 
  unset($_SESSION['discapacidad']); 
  session_destroy();
  header('Location:../index.php');
?>