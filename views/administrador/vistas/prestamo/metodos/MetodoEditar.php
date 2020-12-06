<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id15586349_root');
define('DB_PASSWORD', 'AlejandraMontoya123.');
define('DB_NAME', 'id15586349_polidynamics');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $id = $_GET['idprestamo'];
    $fecha_prestamo = $_GET['fecha_prestamo'];
    $fecha_esperada =  $_GET['fecha_esperada'];
    $hora_inicio =  $_GET['hora_inicio'];
    $hora_fin =  $_GET['hora_fin'];
    $aula =  $_GET['aula'];

    $Query = "UPDATE PRESTAMO SET FECHA_PRESTAMO = '".$fecha_prestamo."', FECHA_PRESTAMO_ESPERADA = '".$fecha_esperada."',
    HORA_INICIO = '".$hora_inicio."', HORA_FIN = '".$hora_fin."', AULA = '".$aula."'
    WHERE ID_PRESTAMO = '".$id."'";

    mysqli_query($link, $Query); 
    header('location: ../ListarPrestamos.php');
    
?>