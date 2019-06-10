<?php
include 'arriba.php';

	session_start();

	if(isset($_SESSION['nombre'])){
    $nomUsu = $_SESSION['nombre'];
  echo  "<h1>Bienvenido  $nomUsu</h1>";
	}
?>
<div class="panel-body">
    <h1>Mis Productos</h1>
    <a href="vercarrito.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="d-flex flex-row">

        <?php
        //get rows query
        $query = $conn->query("SELECT * FROM mis_productos ORDER BY id DESC LIMIT 10");
        $rutaPhoto = "imagenes/";
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                    <div class="images" style="background-image: url(<?php echo $rutaPhoto.$row['photo']; ?>)">
                    </div>
                    <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="agregarcarrito.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agregar</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        <?php } }else{ ?>
        <p>No hay productos todavia.</p>
        <?php } ?>
    </div>
        </div>
        <?php
        include 'abajo.php';

        ?>
