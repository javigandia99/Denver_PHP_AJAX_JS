<?php
if (!isset($_SESSION['usr'])) {
    header("Location:inicio.php");
}
?>
<?php
include 'arriba.php';
?>


<?php
include 'abajo.php';
?>