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
  <script src="scripts/script.js"></script>


  <title>Tienda Online</title>
</head>

<body>
  <header>
    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light primary-color">
      <a class="navbar-brand" href="index.php">
        <div class="logo"></div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="quienesSomos.php">Quienes somos</a>
          </li>

        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
          <li class="nav-item">
            <a href="vercarrito.php" class="nav-link waves-effect waves-light">1
              <i class="fas fa-shopping-cart"></i>
            </a>
          </li>
          <?php
          if (!isset($_SESSION['user'])) {
            echo   '<li class="nav-item">
                      <a class="nav-link" href="inicio.php">Iniciar Sesión</a>
                    </li>';
          }
          ?>
          <?php
          if (isset($_SESSION['user'])) {
            echo  '<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> Perfil </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="#">Mi Historial de compra</a>
              <a class="dropdown-item" href="cerrar.php"> Cerrar Sesión</a>
            </div>
            </li>';
          }
          ?>
        </ul>
      </div>
    </nav>
    <!--/.Navbar -->
    <!--/.Navbar-->
  </header>