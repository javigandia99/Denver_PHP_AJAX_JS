<?php
  include 'arriba.php';
  // error_reporting(0);

  if(isset($_GET['id'])){
    if(count($_SESSION['carrito']) < 2){
      $_SESSION["carrito"] = array();
    } else{
      // Obtenemos su posición
      $pos = 0;
      foreach($_SESSION["carrito"] as $producto){
        if($producto['id'] === $_GET['id']){
          // Borramos el producto del array
          unset($_SESSION["carrito"][$pos]);
        }
        $pos++;
      }
    }
  }
  header("Location: verCarrito2.php");
?>
