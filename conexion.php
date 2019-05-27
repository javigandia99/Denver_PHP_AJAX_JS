<?php
    //CONEXION A BASE DE DATOS
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "bd_pagina_php";
    $conn = new mysqli(
        $servername,
        $user,
        $password,
        $dbname
    );
    // Check connection
    if ($conn->connect_error) {
        die("Error: " . $conn->connect_error);
    }
