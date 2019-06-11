<?php
include 'arriba.php';


	if(isset($_SESSION['user'])){
    $nomUsu = $_SESSION['user'];
	}
?>

<main class="panel-body">
    <a href="vercarrito.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>

    <div id="products" class="d-flex flex-row justify-content-center flex-wrap">

        <?php

				    if(isset($_GET["prod"])){
						$prod = $_GET['prod'];
					} else{
						header("Location: index.php");
					}
					$rutaPhoto = "imagenes/";

        //get rows query
        $query = $conn->query("SELECT * FROM mis_productos where id = '$prod'");
        if($query->num_rows == 1){
            while($row = $query->fetch_assoc()){
        ?>
				<div class="item col-lg-5 cajaTemporada2">
				  <div class="titleTemporada">
				    <h1 id="title">Temporada CGS</h1>
				    <h1 id="titleyear">2019</h1>
				  </div>
				  </div>
        <div class="item col-lg-5 cajas">
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
														<a class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onclick="mostrarModal('<?php echo $row["photo"]; ?>', '<?php echo $row["name"]; ?>', '<?php echo $row["price"]; ?>', '<?php echo $row["id"]; ?>')">Agregar</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        <?php } }else{ ?>
        <p>No esta registrado el producto todavia o hay un conflicto de varios productos.</p>
        <?php } ?>
    </div>
  </main>
        <?php
        include 'abajo.php';

        ?>
