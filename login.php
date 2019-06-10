    <?php
    include "conexion.php";
    session_start();

    ?>

    <?php
    if (isset($_POST["usr"]) && isset($_POST["pwd"])) {
        /*Se ha enviado informacion*/

        $nomUsu = mysqli_real_escape_string($conn, $_POST['usr']);
        $pwdUsu = mysqli_real_escape_string($conn, $_POST['pwd']);

        $sql = "SELECT id_user FROM usuarios WHERE usuario = '$nomUsu' and contrasena = '$pwdUsu'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
        if ($count == 1) {

            $_SESSION['usr'] = $nomUsu;
            //  echo "Correctamente logeado";

            header("Location: index.php");
        } else {
            header("Location: inicio.php?error=notOk");
        }
    } else {
        header("Location: inicio.php?error=noform");
    }
    ?>
