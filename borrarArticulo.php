<?php
  include 'arriba.php';
  error_reporting(0);

  if(isset($_GET['id'])){
    // Obbenemos su posición
    $aux = 0;
    $pos = 0;
    $carrito = $_SESSION["carrito"];
    foreach($carrito as $producto){
      if($producto['id'] === $_GET['id']){
        $pos = $aux;
      }
      $aux++;
    }

    // Borramos el producto del array
    unset($_SESSION["carrito"][$pos]);
    header("Location: verCarrito2.php");
  }
?>
