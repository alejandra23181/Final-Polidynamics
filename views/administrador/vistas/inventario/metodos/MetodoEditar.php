<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id15586349_root');
define('DB_PASSWORD', 'AlejandraMontoya123.');
define('DB_NAME', 'id15586349_polidynamics');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $id = $_GET['idinventario'];
    $referencia = $_GET['referencia'];
    $cantidad =  $_GET['cantidad'];
    $detalle_entrada =  $_GET['detalle_entrada'];

    $Query = "UPDATE INVENTARIO SET REFERENCIA = '".$referencia."', CANTIDAD = '".$cantidad."',
    DETALLE_ENTRADA = '".$detalle_entrada."' WHERE ID_INVENTARIO = '".$id."'";

    mysqli_query($link, $Query); 
    header('location: ../ListarInventario.php');
    
?>