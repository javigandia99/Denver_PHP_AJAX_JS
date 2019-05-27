<?php
//Comprobacion si la sesion esta iniciada
include "conexion.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Tienda Online</title>
</head>

<body>
    <header>
        <div class="view" id="inicio" style="background-color:lightseagreen;">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler navbar-toggler-right collapsed " type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
                    <span class="navbar-toggler-icon blackT"></span>
                </button>
                <div class="" id="">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="bienvenido.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="carrito.php">Carrito de la compra</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>

            </nav>
            <div class="introduccion">
                <?php
                // echo "<h2  class='text-uppercase font-weight-bold text text-center'>BIENVENIDO SEÑOR " . $_SESSION['usr'] . " </h2>";
                ?>
                </a>
            </div>
        </div>
    </header>