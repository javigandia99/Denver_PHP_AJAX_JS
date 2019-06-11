<?php
  include 'arriba.php';
  error_reporting(0);
?>
<main class="container">
  <h1>Carrito de compras</h1>
  <table class="table">
    <tr>
      <th>Producto</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Sub total</th>
      <th>&nbsp;</th>
    </tr>
    <?php
      $total = 0;
      $totalProductos = 0;
      $carrito = $_SESSION["carrito"];
      foreach($carrito as $producto){
        // echo "-> " . $clave['nombre'];
        $subtotal = ($producto['precio'] * $producto['cantidad']);
        $total += $subtotal;
        $totalProductos += $producto['cantidad'];
        echo "<tr>";
        echo "<td>" . $producto['nombre'] . "</td>";
        echo "<td>" . $producto['precio'] . "</td>";
        echo "<td>" . $producto['cantidad'] . "</td>";
        echo "<td>" . $subtotal . "</td>";
        echo "</tr>";
      }
    ?>
    <p>Num productos: <?php echo $totalProductos; ?></p>
    <p>Total: <?php echo $total; ?></p>
  </table>
</main>
<?php
  include 'abajo.php';
?>
