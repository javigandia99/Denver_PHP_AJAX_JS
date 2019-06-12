<?php
  include 'arriba.php';
  error_reporting(0);

  if(isset($_GET['id']) && isset($_GET['cantidad'])){
    if($_GET['cantidad'] > 0){
      $cantidad = $_GET['cantidad'];
      $id = $_GET['id'];
      $pos = 0;
      foreach ($_SESSION['carrito'] as $val) {
        if($val['id'] === $id){
           $_SESSION['carrito'][$pos]['cantidad'] = $cantidad;
        }
      $pos++;
      }
    }
  }
?>
