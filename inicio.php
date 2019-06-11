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
            <div class="col-12 col-md-12 col-lg-8 col-xl-8 p-3 offset-lg-2 offset-xl-2">
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
                        <button type="submit" class="btn btn-primary" id="submit">Inicar Sesion</button>
                    </div>
                    <div>
                        <h5>Eres nuevo en Denver</h5>
                        <a class="btn btn-warning" href="registro.php">Crear tu cuenta de Denver</a>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-12 col-lg-8 col-xl-8 p-3 offset-lg-2 offset-xl-2">

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
