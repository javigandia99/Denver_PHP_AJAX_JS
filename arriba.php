<?php
//Comprobacion si la sesion esta iniciada
include "conexion.php";
session_start();

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos/style.css">
    <script type="text/javascript" src="scripts/agregar.js"></script>

    </script>
    <script src="scripts/script.js"></script>


    <title>Tienda Online</title>
</head>

<body>
    <header>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light primary-color">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="index.php"><div class="logo"></div></a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quienesSomos.php">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="verCarrito2.php">Carrito de la compra</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cerrar.php">Cerrar Sesion</a>
            </li>
            <?php
            if(!isset($_SESSION['user'])){
          echo   '<li class="nav-item">
              <a class="nav-link" href="registro.php">Registrar</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="inicio.php">Log in</a>
            </li>';
          }
            ?>
          </ul>
          <!-- Links -->

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->
    </header>
