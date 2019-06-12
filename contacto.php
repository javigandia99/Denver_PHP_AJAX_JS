<?php
include 'arriba.php';
?>
<main class="panel-body">
	<div id="products" class="d-flex flex-row justify-content-center flex-wrap">
		<div class="item col-lg-9 cajas">
			<div class="container-fluid p-5" id="contact">
				<div class="row">
					<div class="col-12 col-md-12 col-lg-8 col-xl-8 offset-lg-2 offset-xl-2">
						<h2 class="font-weight-bold">Deja tus datos y te contestaremos cuanto antes</h2>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-12 col-md-12 col-lg-8 col-xl-8 p-3 offset-lg-2 offset-xl-2">
						<form method="post" action="mailto:javier.gandia@live.u-tad.com">
							<div class="form-group" id="name">
								<label for="name">Nombre y Apellidos</label>
								<input type="text" class="form-control" id="name" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email:</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
							</div>
							<div class="form-group">
								<label for="comentarios">¿Quieres dejarnos un comentario?</label>
								<textarea class="form-control" rows="5" id="comentarios" name="comentarios"></textarea>
							</div>
							<div class=" col-8  border border-primary">
								<label for="spam">¿Desea recibir publicidad de las temporadas de ropa de nuestra pagina?</label>
								<br />
								<input class="offset-1" type="radio" name="spam" id="yes" value="yes">
								<label for="si">Sí</label>
								<input class="offset-1" type="radio" name="spam" id="no" value="no">
								<label for="no">No</label>
							</div>
							<div class="col-3">
								<button type="submit" class="btn btn-block btn-outline-primary" id="submit">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
include 'abajo.php';

?>