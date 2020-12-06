<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id15586349_root');
define('DB_PASSWORD', 'AlejandraMontoya123.');
define('DB_NAME', 'id15586349_polidynamics');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $id = $_GET['idsolicitud'];
    $descripcion = $_GET['descripcion'];
    $fecha =  $_GET['fecha'];
    $hora =  $_GET['hora'];
    $aula =  $_GET['aula'];

    $Query = "UPDATE SOLICITUD SET  DESCRIPCION = '".$descripcion."', FECHA_CREACION = '".$fecha."',
    HORA = '".$hora."', AULA = '".$aula."' WHERE ID_SOLICITUD= '".$id."'";

    mysqli_query($link, $Query); 
    header('location: ../ListarSolicitudes.php');
    
?>