function cambioCantidad(id, auxId) {
  var xhttp = new XMLHttpRequest();
  var cantidad = document.getElementById("txtCantidad" + auxId).value;
  var precio = document.getElementById("txtPrecio" + auxId).innerHTML;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if(cantidad > 0){
        document.getElementById("txtSubtotal" + auxId).innerHTML = (precio * cantidad);
        // <strong>Total <?php echo '$' . $total . ' USD'; ?></strong>
        document.getElementById("txtTotal").innerHTML = "<strong>Total $" + total + "USD</strong>";
      }
    }
  };
  xhttp.open("GET", "actualizarCantidad.php?cantidad=" + cantidad + "&id=" + id, true);
  xhttp.send();
}
