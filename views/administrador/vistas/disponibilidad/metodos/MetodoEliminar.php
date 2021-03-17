<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id15586349_root');
define('DB_PASSWORD', 'AlejandraMontoya123.');
define('DB_NAME', 'id15586349_polidynamics');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $id_aula = $_GET['ID_AULA'];

    $Query = "DELETE FROM AULA WHERE ID_AULA = '".$id_aula."'";
    mysqli_query($link, $Query);  
    header('location: ../ListarDisponibilidad.php');
?>