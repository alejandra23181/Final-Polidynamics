<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id15586349_root');
define('DB_PASSWORD', 'AlejandraMontoya123.');
define('DB_NAME', 'id15586349_polidynamics');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $id = $_GET['ID_TAREA'];

    $Query = "DELETE FROM TAREA WHERE ID_TAREA = '".$id."'";
    mysqli_query($link, $Query);  
    header('location: ../ListarTareas.php');
?>