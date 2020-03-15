<?php
session_start();

include_once('../db/queries.php');

if (!isset($_POST['email']) && !isset($_POST['pass'])) {
    if (queries::signIn($_POST["email"], $_POST["pass"]) == true) {
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
?>