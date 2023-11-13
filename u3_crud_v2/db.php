<?php
// Conexion con la base de datos
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bd_cfe'
)or die(mysqli_error($mysqli));


//) or die(mysqli_erro($mysqli));
//if (isset($conn)){
//    echo 'DB está conectada';
//}

?>