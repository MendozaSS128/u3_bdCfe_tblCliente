<?php

include('db.php');

if (isset($_POST['saveCliente'])) {
  $nombre = $_POST['nombre'];
  $apellidoM = $_POST['apellidoM'];
  $apellidoP = $_POST['apellidoP'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $fecha = $_POST['fecha'];
  $direccion = $_POST['direccion'];
  $query = "INSERT INTO tbl_cliente(Nombre, ApellidoM, ApellidoP, Telefono, Correo, FechaContra, Direccion) VALUES ('$nombre', '$apellidoM', '$apellidoP', '$telefono', '$correo', '$fecha', '$direccion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>