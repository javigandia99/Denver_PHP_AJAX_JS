<?php
  include "conexion.php";
  session_start();

  if(!isset($_SESSION['user'])){
  		header("Location: index.php");
  }

  if(isset($_GET["action"]) && isset($_GET["id"])){
    $numProductos = $_SESSION['numProductos']++;

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
    foreach ($_SESSION['carrito'] as $key => $val) {
           if($val['id'] === $id){
             $existe = true;
             $val['cantidad']++;
             echo "El producto ya está, hay " . $val['cantidad'];
           }
    }

    if(!$existe){
      $arrProducto = [
  			"id" => $id,
  			"nombre" => $name,
  			"precio" => $price,
  			"descripcion" => $descripcion,
        "foto" => $photo,
        "cantidad" => 1
  	  ];
  	  $_SESSION['carrito'][$numProductos] = $arrProducto;
    }
}
?>
