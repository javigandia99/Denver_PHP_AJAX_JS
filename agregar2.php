<?php
  include "conexion.php";
  session_start();

  if(isset($_SESSION['user'])){
    if(isset($_GET["action"]) && isset($_GET["id"])){
      $txtQuery = "SELECT * FROM mis_productos WHERE id = " . $_GET["id"];
      $query = $conn->query($txtQuery);
      if($query->num_rows > 0){
          while($row = $query->fetch_assoc()){
            $id = $row["id"];
            $photo = "imagenes/" . $row["photo"];
            $name = $row["name"];
            $price = $row["price"];
            $descripcion = $row["description"];
          }
      }

      $existe = false;
      $pos = 0;
      foreach ($_SESSION['carrito'] as $key => $val) {
             if($val['id'] === $id){
               $existe = true;
               $_SESSION['carrito'][$pos]['cantidad']++;
               // $cantidad = $_SESSION['carrito'][$pos]['cantidad'];
             }
          $pos++;
      }

      $numProductos = $_SESSION['numProductos'];
      if(!$existe){
        $numProductos = $_SESSION['numProductos']++;
        $arrProducto = [
    			"id" => $id,
    			"nombre" => $name,
    			"precio" => $price,
    			"descripcion" => $descripcion,
          "foto" => $photo,
          "cantidad" => 1
    	  ];
    	  $_SESSION['carrito'][count($_SESSION['carrito'])] = $arrProducto;
        // array_push($_SESSION['carrito'], $arrProducto);
      }
    }
    header("Location: index.php");
  } else{
    header("Location: index.php?error=noLogin");
  }
?>
