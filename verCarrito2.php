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
      echo "<td><input id='txtCantidad" . $auxId . "' type='number' name='cantidad' value='" . $producto['cantidad'] . "' onchange='cambioCantidad(" . $producto['id'] . ", " . $auxId . ")'></td>";
      echo "<td id='txtSubtotal" . $auxId . "'>" . $subtotal . "</td>";
      echo "<td><a href='borrarArticulo.php?id=" . $producto['id'] . "'>Eliminar</a></td>";
      echo "</tr>";
      $auxId++;
    }
    ?>
    <p>Num productos: <?php echo $totalProductos; ?></p>
    <p>Total: <?php echo $total; ?></p>
  </table>
</main>
<?php
  include 'abajo.php';
?>
