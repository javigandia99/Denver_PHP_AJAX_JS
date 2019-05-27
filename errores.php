<?php
//Comprobacion si la sesion esta iniciada
include "conexion.php";


?>
<?php
    $arrErrores = [
        'registro' => "Successfully registered",
        'noform' => "Form not send",
        'notOk' => "Wrong User or Password",
        'notSession' => "Session not init",
        'cierreSesion' => "Closed session correctly"
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