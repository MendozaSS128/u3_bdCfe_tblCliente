<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MENSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="saveCliente.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="apellidoM" class="form-control" placeholder="Apellido Materno" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="apellidoP" class="form-control" placeholder="Apellido Paterno" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="telefono" class="form-control" placeholder="Telefono" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="correo" class="form-control" placeholder="Correo electronico" autofocus>
          </div>
          <div class="form-group">
            <input type="date" name="fecha" class="form-control" placeholder="Fecha de contratacion" autofocus>
          </div>
          <div class="form-group">
            <textarea name="direccion" rows="2" class="form-control" placeholder="Direccion"></textarea>
          </div>
          <input type="submit" name="saveCliente" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido Materno</th>
            <th>Apellido Paterno</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Fecha de contratacion</th>
            <th>Direccion</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM tbl_cliente";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['ApellidoM']; ?></td>
            <td><?php echo $row['ApellidoP']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Correo']; ?></td>
            <td><?php echo $row['FechaContra']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td>
              <a href="edit.php?idcliente=<?php echo $row['idcliente']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="deleteTask.php?idcliente=<?php echo $row['idcliente']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>