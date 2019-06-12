<?php
if (isset($_SESSION['user'])) {
    header("Location:perfil.php");
}
?>

<?php
include 'arriba.php';
?>

<main>

    <div class="container-fluid pt-5 pb-3" id="registrodiv">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-4 col-xl-4 p-3 offset-md-2 offset-lg-4 offset-xl-4">
                <h2>Crear una cuenta</h2>
                    <form method="post" action="registro.php">

                        <div class="form-group row" id="user">
                            <label for="usr">Usuario:</label>
                            <input type="text" class="form-control" name="user" id="user" required>
                        </div>
                        <div class="form-group row">
                            <label for="pwd">Contraseña:</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                        <div class="form-group row">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group row">
                            <label for="name">Apellidos:</label>
                            <input type="text" class="form-control" name="surname" id="surname" required>
                        </div>
                        <div class="form-group row">
                            <label for="name">Numero de telefono:</label>
                            <input type="number" class="form-control" name="number" id="number">
                        </div>
                        <div class="form-group row">
                            <label for="name">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group row">
                            <label for="name">Dirección:</label>
                            <input type="text" class="form-control" name="address" id="address" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-block btn-outline-primary btn-rounded" id="submit">Registrarse</button>
                        </div>
                        <div class="mt-2">
                            <p>¿Ya tiene una cuenta? <a class="btn btn-outline-warning btn-rounded  btn-sm" href="inicio.php">¡Inicie Sesión!</a></p>
                        </div>
                    </form>
            </div>

            <?php
            //Insert en tabla usuarios
            if (isset($_POST["user"], $_POST["password"], $_POST["name"], $_POST["surname"], $_POST["number"], $_POST["email"], $_POST["address"]) and $_POST["user"] != "" and $_POST["password"] != "" and $_POST["name"] != "" and $_POST["surname"] != "" and $_POST["number"] != "" and $_POST["email"] != "" and $_POST["address"] != "") {
                $user = $_POST["user"];
                $password = $_POST["password"];
                $name = $_POST["name"];
                $surname = $_POST["surname"];
                $phone = $_POST["number"];
                $email = $_POST["email"];
                $address = $_POST["address"];

                $sql = "INSERT INTO clientes (user, password, name, surname, phone, email, address)";
                $sql .= " VALUES ('" . $user . "','" . $password . " ', '" . $name . "','" . $surname . "','" . $phone . "','" . $email . "','" . $address . "')";

                if ($conn->query($sql) === true) {
                    header("Location:inicio.php?error=registro");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            ?>
        </div>

</main>
<?php
include 'abajo.php';
?>