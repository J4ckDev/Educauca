<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <?php if (isset($_SESSION['discapacidad'])):?>
        <link rel="stylesheet" href= "https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/<?php echo $_SESSION['discapacidad'] == '1' ? 'barsVis.css' : 'bars.css' ?>">
    <?php else:?>
        <link rel="stylesheet" href= "https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/bars.css">
    <?php endif?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/speech.js"></script>
    <title>Educauca</title>
</head>