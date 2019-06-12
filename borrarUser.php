
<?php
include 'arriba.php';
            if(isset($_GET["user"])){
            $oldUser = $_GET['user'];
            //Insert en tabla usuarios
                  $sql = "DELETE FROM clientes
                    WHERE user = '$oldUser'";
                if ($conn->query($sql) === true) {
                  session_unset();
                  session_destroy();
                  header("Location: inicio.php?error=cuentaBorrada");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }}
                else{
                  echo "<h2>Error desconocido</h2>";
                }
            ?>
