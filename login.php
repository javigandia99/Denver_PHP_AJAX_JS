    <?php
    include "conexion.php";
    session_start();

    ?>

    <?php
    if (isset($_POST["user"]) && isset($_POST["password"])) {
        /*Se ha enviado informacion*/

        $nomUsu = mysqli_real_escape_string($conn, $_POST['user']);
        $pwdUsu = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT id FROM clientes WHERE user = '$nomUsu' and password = '$pwdUsu'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
        if ($count == 1) {

            $_SESSION['user'] = $nomUsu;
            //  echo "Correctamente logeado";

            header("Location: index.php");
        } else {
            header("Location: inicio.php?error=notOk");
        }
    } else {
        header("Location: inicio.php?error=noform");
    }
    ?>
