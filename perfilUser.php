<?php
include 'arriba.php';


if (!isset($_SESSION['user'])) {
  header("Location: index.php");
}
?>

<main class="panel-body">
    <a href="vercarrito.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>

    <div id="products" class="d-flex flex-row justify-content-center flex-wrap">

        <?php
        //get rows query
        $nomUsu = $_SESSION['user'];
        $query = $conn->query("SELECT * FROM clientes where user = '$nomUsu'");
        if ($query->num_rows == 1) {
            while ($row = $query->fetch_assoc()) {
              $nombre = $row["name"];
              $surname = $row["surname"];
              $nombre = $row["name"];
              $email = $row["email"];
              $phone = $row["phone"];
              $address = $row["address"];
              ?>
                <div class="cajas2">
                            <h4 class="datos"><?php  echo $nombre; echo " "; echo $surname; ?></h4></br></br>
                            <h6 class="datos"><?php echo $nomUsu; ?></h6>
                </div>
            <?php }
    } else { ?>
            <p>No esta registrado el producto todavia o hay un conflicto de varios productos.</p>
        <?php } ?>
    </div>
</main>
<?php
include 'abajo.php';

?>
