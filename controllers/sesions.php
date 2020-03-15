<?php

session_start();

include_once('../db/queries.php');

if (isset($_POST['username']) && isset($_POST['pwd'])) {
    echo "estoy en login";
    if (queries::signIn($_POST["username"], $_POST["pwd"])) {
        if($_SESSION['discapacidad'] == '1'){
           header('location:../views/homevis.php');
        }
        else{
            header('location:../views/homeaud.php');
        }
    } else {
        header('location:../views/signIn.php');
    }
} else if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['code']) && isset($_POST['rol']) && isset($_POST['dis'])) {
    if (queries::signUp($_POST['nombre'],$_POST['apellido'],$_POST['edad'],$_POST['email'],$_POST['pass'],$_POST['code'],$_POST['dis'],$_POST['rol'])) {
        if (queries::signIn($_POST["email"], $_POST["pass"])) {
            if($_SESSION['discapacidad'] == '1'){
               header('location:../views/homevis.php');
            }
            else{
                header('location:../views/homeaud.php');
            }
        } else {
            header('location:../views/signIn.php');
        }
    }
} else {
    header('location:../index.php');
}