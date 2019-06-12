<?php
include 'arriba.php';
error_reporting(0);
?>
<main class="container">
  <br>
  <h1>Carrito de compras</h1>
  <table class="table">
    <tr>
      <th>Producto</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Sub total</th>
      <th></th>
    </tr>
    <?php
    $total = 0;
    $totalProductos = 0;
    $carrito = $_SESSION["carrito"];
    $auxId = 0;
    foreach ($carrito as $producto) {
      // echo "-> " . $clave['nombre'];
      $subtotal = ($producto['precio'] * $producto['cantidad']);
      $total += $subtotal;
      $totalProductos += $producto['cantidad'];
      echo "<tr>";
      echo "<td>" . $producto['nombre'] . "</td>";
      echo "<td id='txtPrecio" . $auxId . "'>" . $producto['precio'] . "</td>";
      echo "<td><input id='txtCantidad" . $auxId . "' type='number' min='1' name='cantidad' value='" . $producto['cantidad'] . "' onchange='cambioCantidad(" . $producto['id'] . ", " . $auxId . ")'></td>";
      echo "<td id='txtSubtotal" . $auxId . "'>" . $subtotal . "</td>";
      echo "<td><a href='borrarArticulo.php?id=" . $producto['id'] . "'>Eliminar</a></td>";
      echo "</tr>";
      $auxId++;
    }
    ?>
    <p>Numero de productos: <?php echo $totalProductos; ?></p>
  </table>
  <div class="row">
    <div class="col-12 col-xl-4">
      <a href="index.php" class="btn btn-outline-warning">Continuar comprando</a>
    </div>
    <div class="col-12 col-xl-2 offset-xl-4">
      <p class="text-center mt-2"><strong>Total <?php echo '$' . $total . ' USD'; ?></strong></p>
    </div>
    <div class="col-12 col-xl-2">
      <a href="pagos.php" class="btn btn-outline-success btn-block">Tramitar Pedido</a>
    </div>
  </div>
</main>
<?php
include 'abajo.php';
?>