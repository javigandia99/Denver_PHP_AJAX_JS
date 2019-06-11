function mostrarModal(img, title, price, id) {
  var path = "imagenes/" + img;
  var txtPrice = "$" + price + " USD";
  var href = "agregar2.php?action=addToCart&id=" + id;
  document.getElementById("modalImg").src = path;
  document.getElementById("modalTitle").innerHTML = title;
  document.getElementById("modalPrice").innerHTML = txtPrice;
  document.getElementById("modalAgregar").href = href;
}
