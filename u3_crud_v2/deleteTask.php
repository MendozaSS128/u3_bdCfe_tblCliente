<?php

include("db.php");

if(isset($_GET['idcliente'])) {
  $id = $_GET['idcliente'];
  $query = "DELETE FROM tbl_cliente WHERE idcliente = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta fallida.");
  }

  $_SESSION['message'] = 'Borrado con Exito';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>