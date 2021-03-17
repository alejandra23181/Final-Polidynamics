<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id15586349_root');
define('DB_PASSWORD', 'AlejandraMontoya123.');
define('DB_NAME', 'id15586349_polidynamics');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $NUMERO_AULA =$_POST['NUMERO_AULA'];
    $BLOQUE =$_POST['BLOQUE'];
    $DISPONIBILIDAD =$_POST['DISPONIBILIDAD'];

    if (isset($NUMERO_AULA) && !empty($BLOQUE) && isset($DISPONIBILIDAD)) {

        if($NUMERO_AULA != null || $BLOQUE != null || $DISPONIBILIDAD != null){
            $QuerySQL = "INSERT INTO AULA (ID_AULA, NUMERO_AULA, BLOQUE, DISPONIBILIDAD)
            VALUES (NULL, '".$NUMERO_AULA."', '".$BLOQUE."', '".$DISPONIBILIDAD."')";


            if (mysqli_query($link,$QuerySQL)){
                header('location: ../ListarDisponibilidad.php');
            }
        }
}
?>