<?php
include 'arriba.php';
?>

<main>

    <div class="container-fluid pt-5 pb-3" id="proyects">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 col-xl-8 p-3 offset-lg-2 offset-xl-2">
                <h2>Crear una cuenta</h2>
                <section class="register-form">
                    <p>¿Ya tiene una cuenta? <a href="login.php">¡Inicie Sesión!</a></p>
                    <form method="post" action="registro.php">
                        <div class="form-group row ">
                            <label class="col-md-3 form-control-label">
                                Tratamiento
                            </label>
                        </div>
                        <div class="col-md-6 form-control-valign">
                            <label class="radio-inline">
                                <span class="custom-radio">
                                    <input name="id_gender" type="radio" value="1">
                                    <span></span>
                                </span>
                                Sr.
                            </label>
                            <label class="radio-inline">
                                <span class="custom-radio">
                                    <input name="id_gender" type="radio" value="2">
                                    <span></span>
                                </span>
                                Sra.
                            </label>
                        </div>
                        <div class="form-group row" id="usr">
                            <label for="usr">Usuario:</label>
                            <input type="text" class="form-control" name="usr" id="usr" required>
                        </div>
                        <div class="form-group row">
                            <label for="pwd">Contraseña:</label>
                            <input type="password" class="form-control" name="pwd" id="pwd" required>
                        </div>
                        <div class="form-group row">
                            <label for="name">Nombre:</label>
                            <input type="name" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group row">
                            <label for="name">Apellidos:</label>
                            <input type="name" class="form-control" name="surname" id="surname" required>
                        </div>
                        <div class="form-group row">
                            <label for="name">Numero de telefono:</label>
                            <input type="name" class="form-control" name="number" id="number">
                        </div>
                        <div class="form-group row">
                            <label for="name">Email:</label>
                            <input type="name" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                        </div>
                        
                        <div>
                            <button type="submit" class="btn btn-primary" id="submit">Registrarse</button>
                            <button type="submit" class="btn btn-warning"><a href="inicio.php">Ya estoy registrado</a></button>
                        </div>
                    </form>
                    <div class="col-12" id="imgproyect">
                        <img src="https://media.giphy.com/media/owUQcK4bijuKY/giphy.gif" class="img-fluid">
                    </div>

            </div>

            <?php
            //Insert en tabla usuarios
            if (isset($_POST["usr"], $_POST["pwd"], $_POST["name"], $_POST["surname"], $_POST["number"], $_POST["email"]) and $_POST["usr"] != "" and $_POST["pwd"] != "" and $_POST["name"] != "" and $_POST["surname"] != "" and $_POST["number"] != "" and $_POST["email"] != "") {
                $usr = $_POST["usr"];
                $pwd = $_POST["pwd"];
                $name = $_POST["name"];
                $surname = $_POST["surname"];
                $number = $_POST["number"];
                $email = $_POST["email"];

                $sql = "INSERT INTO usuarios (usuario, contrasena, nombre, apellidos, numerotelefono, email)";
                $sql .= " VALUES ('" . $usr . "','" . $pwd . " ', '" . $name . "','" . $surname . "','" . $number . "','" . $email . "')";

                if ($conn->query($sql) === true) {
                    echo "Nuevo registro realizado correctamente";
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