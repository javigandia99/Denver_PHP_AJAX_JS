<?php
include 'arriba.php';
?>
<main class="container">

    <h1>Carrito de compras</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Sub total</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($cart->total_items() > 0) {
                //get cart items from session
                $cartItems = $cart->contents();
                foreach ($cartItems as $item) {
                    ?>
                    <tr>
                        <td><?php echo $item["name"]; ?></td>
                        <td><?php echo '$' . $item["price"] . ' USD'; ?></td>
                        <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
                        <td><?php echo '$' . $item["subtotal"] . ' USD'; ?></td>
                        <td>
                            <a href="AccionCarta.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Confirma eliminar?')"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                <?php }
        } else { ?>
                <tr>
                    <td colspan="5">
                        <p>Tu carta esta vacia.....</p>
                    </td>
                <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a></td>
                <td colspan="2"></td>
                <?php if ($cart->total_items() > 0) { ?>
                    <td class="text-center"><strong>Total <?php echo '$' . $cart->total() . ' USD'; ?></strong></td>
                    <td><a href="Pagos.php" class="btn btn-success btn-block">Pagos <i class="glyphicon glyphicon-menu-right"></i></a></td>
                <?php } ?>
            </tr>
        </tfoot>
    </table>
</main>
<?php
include 'abajo.php';

?>