<?php
include_once('views/layouts/head.php');
include_once('views/layouts/body.php');

if (isset($_GET['dir'])) {
    if ($_GET['dir']=='1') {
        include_once('views/signUp.php');
    }    
} else {
    include_once('views/signIn.php');
}

include_once('views/layouts/footer.php');