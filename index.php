<?php
include 'arriba.php';


	if(isset($_SESSION['user'])){
    $nomUsu = $_SESSION['user'];

	}
?>
<div class="item col-lg-12 cajaTemporada" id="cajaIntro">
  <div class="titleTemporada">
    <h1 id="title">Temporada CGS</h1>

  </div>
  <div class="titleSaludo">
    <?php
      echo  "<h5>Bienvenido  $nomUsu</h5>"; ?>
  </div>

  </div>
<main class="panel-body">
    <a href="vercarrito.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>

    <div id="products" class="d-flex flex-row justify-content-center flex-wrap">

        <?php
        //get rows query
        $query = $conn->query("SELECT * FROM mis_productos ORDER BY id DESC LIMIT 10");
        $rutaPhoto = "imagenes/";
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-3 cajas">
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
														<a class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onclick="mostrarModal('<?php echo $row["photo"]; ?>', '<?php echo $row["name"]; ?>', '<?php echo $row["price"]; ?>')">Agregar</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        <?php } }else{ ?>
        <p>No hay productos todavia.</p>
        <?php } ?>
    </div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">¿Agregar al carrito?</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div style="margin: auto;" class="modal-body">
		        <!-- body del modal -->
							<!-- Conteniido generado en js -->
							<img id="modalImg" width="200px" src="imagenes/logo.png" alt="imgModal">
							<h5 id="modalTitle">Título</h5>
							<p id="modalPrice" style="text-align:right;">0,00 €</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        <a class="btn btn-success" href="agregarcarrito.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agregar</a>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- End modal -->
  </main>
        <?php
        include 'abajo.php';

        ?>
