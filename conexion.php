<?php
    //CONEXION A BASE DE DATOS
    $servername = "localhost";
    $userdb = "root";
    $passworddb = "";
    $dbname = "bd_denver";
    $conn = new mysqli(
        $servername,
        $userdb,
        $passworddb,
        $dbname
    );
    // Check connection
    if ($conn->connect_error) {
        die("Error: " . $conn->connect_error);
    }
