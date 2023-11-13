<?php
include("db.php");
$nombre = '';
$apellidoM = '';
$apellidoP= '';
$telefono = '';
$correo= '';
$fecha = '';
$direccion = '';


if  (isset($_GET['idcliente'])) {
  $id = $_GET['idcliente'];
  $query = "SELECT * FROM tbl_cliente WHERE idcliente=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['Nombre'];
    $apellidoM = $row['ApellidoM'];
    $apellidoP = $row['ApellidoP'];
    $telefono = $row['Telefono'];
    $correo = $row['Correo'];
    $fecha = $row['FechaContra'];
    $direccion = $row['Direccion'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['idcliente'];
  $nombre = $_POST['nombre'];
  $apellidoM = $_POST['apellidoM'];
  $apellidoP = $_POST['apellidoP'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $fecha = $_POST['fecha'];
  $direccion = $_POST['direccion'];

  $query = "UPDATE tbl_cliente set Nombre = '$nombre', ApellidoM = '$apellidoM', ApellidoP = '$apellidoP', Telefono = '$telefono', Correo = '$correo', FechaContra = '$fecha', Direccion = '$direccion' WHERE idcliente=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actualizado con Exito';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?idcliente=<?php echo $_GET['idcliente']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualiza el nombre">
        </div>
        <div class="form-group">
          <input name="apellidoM" type="text" class="form-control" value="<?php echo $apellidoM; ?>" placeholder="Actualiza el apellidoM">
        </div>
        <div class="form-group">
          <input name="apellidoP" type="text" class="form-control" value="<?php echo $apellidoP; ?>" placeholder="Actualiza el apellidoP">
        </div>
        <div class="form-group">
          <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Actualiza el telefono">
        </div>
        <div class="form-group">
          <input name="correo" type="text" class="form-control" value="<?php echo $correo; ?>" placeholder="Actualiza el correo">
        </div>
        <div class="form-group">
          <input name="fecha" type="date" class="form-control" value="<?php echo $fecha; ?>" placeholder="Actualiza el fecha">
        </div>
        <div class="form-group">
        <textarea name="direccion" class="form-control" cols="30" rows="10"><?php echo $direccion;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>