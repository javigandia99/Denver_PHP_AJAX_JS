function mostrarModal(img, title, price) {
  var path = "imagenes/" + img;
  var txtPrice = "$" + price + " USD";
  document.getElementById("modalImg").src = path;
  document.getElementById("modalTitle").innerHTML = title;
  document.getElementById("modalPrice").innerHTML = txtPrice;
}
