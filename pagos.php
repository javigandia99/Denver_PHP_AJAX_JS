<?php
include 'arriba.php';
error_reporting(0);
// set customer ID in session
$_SESSION['clienteId'] = 1;

// get customer details by session customer ID
$query = $conn->query("SELECT * FROM clientes WHERE id = " . $_SESSION['clienteId']);
$row = $query->fetch_assoc();

?>
<main class="container">
    <br/>
    <h1>Vista previa del pedido</h1>
    <div class="row">
        <div class="col-7 mt-5">
            <table class="table">
                <tr>
                    <th class="text text-center">Producto</th>
                    <th class="text text-center">Precio</th>
                    <th class="text text-center">Cantidad</th>
                    <th class="text text-center">Sub total</th>
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
                    echo "<td class='text text-center'>" . $producto['cantidad'] . "</td>";
                    echo "<td class='text text-center' id='txtSubtotal" . $auxId . "'>" . $subtotal . "</td>";
                    echo "</tr>";
                    $auxId++;
                }
                ?>
            </table>
        </div>
        <div class="col-4 offset-1 mt-4">
            <h4>Detalles de envío</h4>
            <p>Nombre: <?php echo $row['name']; ?></p>
            <p>Email: <?php echo $row['email']; ?></p>
            <p>Telefono: <?php echo $row['phone']; ?></p>
            <p>Dirección: <?php echo $row['address']; ?></p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12 col-xl-4">
            <a href="verCarrito2.php" class="btn btn-outline-warning"><i class="fa fa-chevron-left"></i> Cambiar pedido</a>
        </div>
        <div class="col-12 col-xl-2 offset-xl-1">
            <p class="text-center mt-2"><strong>Total <?php echo '$' . $total . ' USD'; ?></strong></p>
        </div>
        <div class="col-12 col-xl-2 offset-xl-3">
            <a href="pedidorealizado.php" class="btn btn-outline-success btn-block">Realizar pago <i class="fa fa-chevron-right"></i> </a>
        </div>
    </div>
</main>
<?php
include 'abajo.php';
?>