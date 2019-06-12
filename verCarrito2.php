<?php
include 'arriba.php';
error_reporting(0);
?>
<main class="container">
  <br>
  <h1>Carrito de compras</h1>
  <table class="table">
    <tr>
      <th class="text text-center">Producto</th>
      <th class="text text-center">Precio</th>
      <th class="text text-center">Cantidad</th>
      <th class="text text-center">Sub total</th>
      <th> </th>
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
      echo "<td class='text text-center'>" . $producto['nombre'] . "</td>";
      echo "<td class='text text-center' id='txtPrecio" . $auxId . "'>" . $producto['precio'] . "</td>";
      echo "<td class='text text-center'><input id='txtCantidad" . $auxId . "' type='number' min='1' class='text text-center' style='border: 2px solid lightblue; border-radius: 10px;' name='cantidad' value='" . $producto['cantidad'] . "' onchange='cambioCantidad(" . $producto['id'] . ", " . $auxId . ")'></td>";
      echo "<td class='text text-center' id='txtSubtotal" . $auxId . "'>" . $subtotal . "</td>";
      echo "<td ><a href='borrarArticulo.php?id=" . $producto['id'] . "'><i class='fa fa-trash' style='font-size: 1.3em; color:red;'></i></a></td>";
      echo "</tr>";
      $auxId++;
    }
    if ($totalProductos == 0) { ?>
      <tr>
        <td colspan="5">
          <p>No hay productos guardados en el carrito...</p>
        </td>
      <?php } ?>

      <p>Numero de productos: <?php echo $totalProductos; ?></p>
  </table>
  <div class="row">
    <div class="col-12 col-xl-4">
      <a href="index.php#products" class="btn btn-outline-warning"><i class="fa fa-chevron-left"></i> Continuar comprando</a>
    </div>
    <div class="col-12 col-xl-2 offset-xl-4">
      <p class="text-center mt-2"><strong>Total <?php echo '$' . $total . ' USD'; ?></strong></p>
    </div>
    <div class="col-12 col-xl-2">
      <a href="pagos.php" class="btn btn-outline-success btn-block">Tramitar Pedido <i class="fa fa-chevron-right"></i> </a>
    </div>
  </div>
</main>
<?php
include 'abajo.php';
?>