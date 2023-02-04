<?php

include("configuracion.php");

$conexion = new mysqli($server, $user, $pass, $bd);

if (mysqli_connect_error()) {
  die("Connection failed: " . mysqli_connect_error() );
  exit();
}//else{
  //echo "Connected successfully";
//}

?>