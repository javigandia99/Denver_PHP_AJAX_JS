<?php
//Comprobacion si la sesion esta iniciada
include "conexion.php";


?>
<?php
    $arrErrores = [
        'registro' => "¡Registro realizado correctamente!",
        'noform' => "Formulario no enviado",
        'notOk' => "Usuario o contraseña erroneos",
        'notSession' => "Sesión no iniciada",
        'cierreSesion' => "¡Sesión cerrada correctamente!"
    ];

    if(isset($_GET["error"])){
		$claveError = $_GET['error'];
		if(isset($arrErrores[$claveError])){
			echo "<h2>$arrErrores[$claveError]</h2>";
		}else{
			echo "<h2>Error desconocido</h2>";
		}
	}

    ?>