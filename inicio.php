<?php
include 'arriba.php'
?>
<?php
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>
<main>
    <div class="container-fluid pt-5 pb-3" id="proyects">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-4 col-xl-4 p-3 offset-md-2 offset-lg-4 offset-xl-4">
                <h2>Iniciar Sesión</h2>
                <form method="post" action="login.php">
                    <div class="form-group" id="user">
                        <label for="user">Usuario:</label>
                        <input type="text" class="form-control" id="user" name="user" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-block btn-outline-success btn-rounded" id="submit">Inicar Sesion</button>
                    </div>
                    <div class="mt-2">
                        <p>Eres nuevo en Denver <a class="btn btn-outline-warning btn-rounded  btn-sm" href="registro.php">¡Crear tu cuenta aqui!</a></p>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-8 col-lg-4 col-xl-4 p-3 offset-md-2 offset-lg-4 offset-xl-4">
                <?php

                include 'errores.php';

                ?>
            </div>
        </div>
    </div>
</main>
<?php
include 'abajo.php'
?>