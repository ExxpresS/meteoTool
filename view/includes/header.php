<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- custom css -->

    <?php
    if ($_SERVER["SERVER_NAME"] === "localhost") {
    ?>
        <link rel="stylesheet" href="/meteoTool/public/css/style.css">
    <?php
    } else {
    ?>
        <link rel="stylesheet" href="/public/css/style.css">
    <?php
    }
    ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- custom js  -->
    <?php
    if ($_SERVER["SERVER_NAME"] === "localhost") {
    ?> <script type="text/javascript" src="/meteoTool/public/js/main.js"></script>
    <?php
    } else {
    ?> <script type="text/javascript" src="/public/js/main.js"></script>
    <?php
    }
    ?>
    <!-- Jquery -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- ---- Font Awesome ---- -->
    <script src="https://kit.fontawesome.com/37f5cd1683.js"></script>
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">


    <title>Météo Almanarre</title>
</head>