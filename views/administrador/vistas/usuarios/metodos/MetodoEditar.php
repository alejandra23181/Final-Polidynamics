<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id15586349_root');
define('DB_PASSWORD', 'AlejandraMontoya123.');
define('DB_NAME', 'id15586349_polidynamics');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$ID_USUARIO = $_GET['ID_USUARIO'];
$SEGUNDO_NOMBRE_USUARIO = $_GET['SEGUNDO_NOMBRE_USUARIO'];
$SEGUNDO_APELLIDO_USUARIO =  $_GET['SEGUNDO_APELLIDO_USUARIO'];
$TELEFONO =  $_GET['TELEFONO'];
$EMAIL =  $_GET['EMAIL'];
$username =  $_GET['username'];
$password =  $_GET['password'];

$Query = "UPDATE USUARIO SET  SEGUNDO_NOMBRE_USUARIO = '".$SEGUNDO_NOMBRE_USUARIO."', SEGUNDO_APELLIDO_USUARIO = '".$SEGUNDO_APELLIDO_USUARIO."',
    TELEFONO = '".$TELEFONO."', EMAIL = '".$EMAIL."',username = '".$username."', password = '".$password."' WHERE ID_USUARIO= '".$ID_USUARIO."'";

mysqli_query($link, $Query); 
header("Location: ../ListarUsuarios.php");

?>