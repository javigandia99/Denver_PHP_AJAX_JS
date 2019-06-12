<?php
include 'arriba.php';


if (!isset($_SESSION['user'])) {
  header("Location: index.php");
}
?>

<main class="panel-body">
    <a href="vercarrito.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>

    <div id="products" class="d-flex flex-row justify-content-center flex-wrap">

        <?php
        //get rows query
        $nomUsu = $_SESSION['user'];
        $query = $conn->query("SELECT * FROM clientes where user = '$nomUsu'");
        if ($query->num_rows == 1) {
            while ($row = $query->fetch_assoc()) {
              $nombre = $row["name"];
              $surname = $row["surname"];
              ?>
                <div class="cajas3">
                  <div class="textoUser">
                    <h4 class="datos"><?php  echo $nombre; echo " "; echo $surname; ?></h4><br/>
                        <p class="datos">Usuario: <b><?php echo $nomUsu; ?></b></p>
                        <p class="datos">Email: <b><?php echo $row["email"]; ?></b></p>
                        <p class="datos">Telefono: <b><?php echo $row["phone"]; ?></b></p>
                        <p class="datos">Direccion: <b><?php echo $row["address"]; ?></b></p>
                        <div class="col-md-6 buttonMod">
                            <a class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal" onclick="mostrarModalDireccion('<?php echo $nomUsu; ?>', '<?php echo $nombre; ?>',
                              '<?php echo $surname; ?>', '<?php echo $row["phone"]; ?>', '<?php echo $row["email"]; ?>', '<?php echo $row["address"]; ?>')">Modificar cuenta</a>
                              <a class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalBorrar">Borrar cuenta</a>
                        </div>
                    </div>
                </div>
              <?php }
      } else { ?>
              <p>No esta registrado el producto todavia o hay un conflicto de varios productos.</p>
          <?php } ?>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="margin: auto;">¿Quiere modificar sus datos?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div style="margin: auto; padding: 10%;" class="modal-body">
                        <!-- body del modal -->
                          <!-- Contenido generado en js -->
                          <form method="post" action="modificarUser.php?user=<?php echo $nomUsu?>">

                              <div class="form-group row">
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
                          <img id="modalImg" width="25%" src="imagenes/logo.png" alt="imgModal">
                      </div>
                      <div class="modal-footer d-flex flex-wrap">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-outline-primary btn-rounded" id="submit">Modificar</button>
                        <div class="avisoMod alert alert-warning">
                          <label for="datos">Modificar los datos requiere cerrar sesion.</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="exampleModalBorrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel" style="margin: auto;">¿Quiere borrar su cuenta?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="avisoMod2 alert alert-warning">
                    <p for="datos">Si borra la cuenta perderá toda la información sobre ella.</p>
                  </div>

                    <div class="modal-footer d-flex flex-wrap">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                       <a id="modalAgregar" class="btn btn-danger" href="borrarUser.php?user=<?php echo $nomUsu; ?>">Borrar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</main>
<?php
include 'abajo.php';

?>
