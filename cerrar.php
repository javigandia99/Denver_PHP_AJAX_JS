<?php

	session_start();

	if(isset($_SESSION['usr'])){

		session_unset();
		session_destroy();
		
		header("Location: inicio.php?error=cierreSesion");
		
	}else{
		
		header("Location: inicio.php?error=notSession");
		
	}


?>