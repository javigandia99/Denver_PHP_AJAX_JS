<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulario de Login</title>
</head>

<body>
    <?php
    if (isset($_SESSION['usr'])) {
        header("Location: perfil.php");
    }
    ?>
    <?php
    include "conexion.php";
    ?>
    <div class="container-fluid pt-5 pb-3" id="proyects">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 col-xl-8 p-3 offset-lg-2 offset-xl-2">
                <h2>Formulario de LOGIN</h2>
                <form method="post" action="login.php">
                    <div class="form-group" id="name">
                        <label for="usr">User:</label>
                        <input type="text" class="form-control" id="usr" name="usr" placeholder="Enter user" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" id="submit">Inicar Sesion</button>
                        <button class="btn btn-warning"><a href="registro.php">Registrarse</a></button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-12 col-lg-8 col-xl-8 p-3 offset-lg-2 offset-xl-2">
                <?php

                include 'errores.php';

                ?>
            </div>
            <div class="col-12 col-md-12 col-lg-8 col-xl-8 p-3 offset-lg-2 offset-xl-2" id="imgproyect">
                    <img src="https://66.media.tumblr.com/77f0ea97b525c668b236f6c39f7ae30f/tumblr_inline_mlsj3koXST1qz4rgp.gif" class="img-fluid">
            </div>
</body>

</html>