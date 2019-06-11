
<?php
include 'arriba.php';
?>
<?php
if (!isset($_SESSION['user'])) {
    header("Location:inicio.php");
}
?>

<?php
include 'abajo.php';
?>
