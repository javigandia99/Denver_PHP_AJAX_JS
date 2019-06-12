function cambioCantidad(id, auxId) {
  var xhttp = new XMLHttpRequest();
  var cantidad = document.getElementById("txtCantidad" + auxId).value;
  var precio = document.getElementById("txtPrecio" + auxId).innerHTML;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("txtSubtotal" + auxId).innerHTML = (precio * cantidad);
    }
  };
  xhttp.open("GET", "actualizarCantidad.php?cantidad=" + cantidad + "&id=" + id, true);
  xhttp.send();
}
