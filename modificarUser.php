
<?php
include 'arriba.php';
            if(isset($_GET["user"])){
            $oldUser = $_GET['user'];}
            else{
              echo "<h2>Error desconocido</h2>";
            }

            //Insert en tabla usuarios
            if (isset($_POST["user"], $_POST["password"], $_POST["name"], $_POST["surname"], $_POST["number"], $_POST["email"], $_POST["address"])){
                $user = $_POST["user"];
                $password = $_POST["password"];
                $name = $_POST["name"];
                $surname = $_POST["surname"];
                $phone = $_POST["number"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                  $sql = "UPDATE clientes
                    SET user = '$user', password = '$password', name = '$name', surname = '$surname', email = '$email', phone = '$phone', address = '$address'
                    WHERE user = '$oldUser'";
                if ($conn->query($sql) === true) {
                    echo "Nuevo registro realizado correctamente";
                    header("Location:cerrar.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            ?>
