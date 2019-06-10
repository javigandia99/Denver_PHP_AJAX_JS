    <?php
    include "conexion.php";
    session_start();

    ?>

    <?php
    if (isset($_POST["usr"]) && isset($_POST["password"])) {
        /*Se ha enviado informacion*/

        $nomUsu = mysqli_real_escape_string($conn, $_POST['usr']);
        $pwdUsu = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT id_user FROM usuarios WHERE usuario = '$nomUsu' and contrasena = '$pwdUsu'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
        if ($count == 1) {

            //  echo "Correctamente logeado";

            session_start();

            $_SESSION["nombre"] = $nomUsu;

            $_SESSION["carrito"] = array();

            $_SESSION["numProductos"] = 0;

            header("Location: index.php");
           } else {
            header("Location: errores.php?error=notOk");
        }
    } else {
        header("Location: errores.php?error=noform");



    	}
    ?>
    <br/>
    </body>
    </html>
