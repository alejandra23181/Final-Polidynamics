<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id15586349_root');
define('DB_PASSWORD', 'AlejandraMontoya123.');
define('DB_NAME', 'id15586349_polidynamics');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$ID_USUARIO =$_GET['ID_USUARIO'];
  $sql="DELETE FROM USUARIO WHERE ID_USUARIO='$ID_USUARIO'";
  $ejecutar=mysqli_query($link, $sql);

  if($ejecutar){
      header("Location:../ListarUsuarios.php");

  }

?>