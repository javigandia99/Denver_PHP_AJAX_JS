<?php
if (isset($_SESSION['usr'])) {
    header("Location:inicio.php");
}
?>
<?php
include 'arriba.php';
?>
<div class="navbar-collapse collapse" id="navb">
    <ul class="navul navbar-nav">
        <li class="navText nav-item d-flex align-items-start">
            <a class="nav-link " href="bienvenido.php">Bienvenida</a>
        </li>
        <li class="navText nav-item">
            <a class="nav-link" href="secun.php">Secundaria</a>
        </li>
    </ul>

    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>


    <ul class="navul navbar-nav nav justify-content-end">
        <li class="navText nav-item">
            <a class="nav-link" href="inicio.php">Iniciar Sesion</a>
        </li>
        <li class="navText nav-item">
            <a class="nav-link" href="#">Carrito</a>
        </li>

        <li class="navText nav-item">
            <a class="nav-link disabled" href="#">Administracion</a>
        </li>
        <li class="navText nav-item d-flex align-items-end">
            <a class="nav-link" href="cerrar.php">Cerrar Sesion</a>
        </li>
    </ul>
</div>

<?php
include 'abajo.php';
?>