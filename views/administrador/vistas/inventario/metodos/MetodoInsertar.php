<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id15586349_root');
define('DB_PASSWORD', 'AlejandraMontoya123.');
define('DB_NAME', 'id15586349_polidynamics');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $referencia =$_POST['referencia'];
    $cantidad =$_POST['cantidad'];
    $detalle_entrada =$_POST['detalle_entrada'];

    if (isset($referencia) && !empty($cantidad) && isset($detalle_entrada)) {

        if($referencia != null || $cantidad != null || $detalle_entrada != null){
            $QuerySQL = "INSERT INTO INVENTARIO (ID_INVENTARIO, REFERENCIA, CANTIDAD, DETALLE_ENTRADA)
            VALUES (NULL, '".$referencia."', '".$cantidad."', '".$detalle_entrada."')";


            if (mysqli_query($link,$QuerySQL)){
                header('location: ../ListarInventario.php');
            }
        }
}
?>