<?php
include "arriba.php";

if (!isset($_REQUEST['id'])) {
  header("Location: index.php");
}
?>
<main class="container">
    <br/>
    <div>
        <h1>Estado de su Pedido</h1>
        <p>Su pedido ha sido enviado exitosamente. La ID del pedido es #<?php echo $_GET['id']; ?></p>
    </div>
</main>

<?php
include "abajo.php";
?>