<?php
include 'arriba.php';

?>
<style>
	.contenido {
		max-width: 760px;
		margin: 20px 0 0 100px;
	}

	.cont_principal {
		margin: auto;
		width: 50%;
	}

	.principal {

		border-bottom: solid 1px rgba(255, 255, 255, .5);

	}

	.principal h1 {
		font-size: 32px;
		color: black;
		text-shadow: 1px 1px 1px rgba(0, 0, 0, .75);
		border-bottom: solid 1px rgba(255, 255, 255, .5);

	}

	p,
	li,
	legend,
	form {
		font-size: 18px;
		color: black;
		line-height: 125%;
		margin-bottom: 10px;
	}

	input {
		font-size: 20px;
	}

	form .wide {
		font-size: 18px;
		width: 100%;
	}

	form#order div,
	form#form_registro div {
		padding-bottom: 10px;
	}

	form#order .label,
	form#form_registro .label {
		display: block;
		clear: left;
		float: left;
		width: 175px;
		text-align: right;
		padding: 7px 15px 0 0;
		text-transform: uppercase;
		font-weight: bold;
	}

	form#form_registro .label {
		width: 200px;
	}


	form#order select,
	form#form_registro select {
		display: inline-block;
		margin-top: 8px;
	}

	form#order input[type="radio"],
	form#form_registro input[type="radio"],
	form#form_registro input[type="checkbox"] {
		display: inline-block;
		margin-top: 10px;
	}

	form .indent,
	#submit {
		margin-left: 215px;
	}

	#form_registro .indent label.error {
		margin-left: 0;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<main class="panel-body">
	<div id="products" class="d-flex flex-row justify-content-center flex-wrap">
		<div class="item col-lg-9 cajas">
			<div class="cont_principal">
				
					<div class="principal">
						<h1>Deja tus datos y te contestaremos cuanto antes</h1>
						<form name="form_registro" id="form_registro">
							<div>
								<label for="nombre" class="label">Nombre</label>
								<input name="nombre" type="text" id="nombre" class="required" title="Introduce tu nombre por favor">
							</div>
							<div>
								<label for="email" class="label">Email</label>
								<input name="e_mail" type="text" id="e_mail">
							</div>
							<div>
								<label for="ciudad" class="label">Ciudad</label>
								<select name="ciudad" id="ciudad">
									<option value="">--Por favor, selecciona--</option>
									<option value="madrid">Madrid</option>
									<option value="barcelona">Barcelona</option>
									<option value="sevilla">Sevilla</option>
									<option value="otra">Otra</option>
								</select>
							</div>
							<div>
								<label for="comentarios" class="label">¿Quieres dejarnos un comentario?</label>
								<textarea name="comentarios" cols="15" rows="5" id="comentarios"></textarea>
							</div>
							<div class="labelBlock">¿Deseas recibir anuncios de ofertas?</div>
							<div class="indent">
								<input type="radio" name="spam" id="yes" value="yes">
								<label for="si">Sí</label>
								<input type="radio" name="spam" id="Por_supuesto" value="Por_supuesto">
								<label for="definitely">Por supuesto</label>
								<input type="radio" name="spam" id="eleccion" value="eleccion">
								<label for="eleccion">¿Tengo elección?</label>
							</div>
							<div>
								<input type="submit" name="submit" id="submit" value="Enviar">
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