<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id15586349_root');
define('DB_PASSWORD', 'AlejandraMontoya123.');
define('DB_NAME', 'id15586349_polidynamics');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $detalle =$_POST['detalle'];
    $recomendaciones =$_POST['recomendaciones'];
    $fechainicio =$_POST['fechainicio'];
    $horainicio =$_POST['horainicio'];
    $horafin =$_POST['horafin'];
    $solicitud =$_POST['solicitud'];
    $tipotarea =$_POST['tipotarea'];
    $usuario =$_POST['usuario'];



    $QuerySQL = "INSERT INTO TAREA (ID_TAREA, DETALLE, RECOMENDACION, FECHA_INICIO,HORA_INICIO,HORA_FINAL,SOLICITUD,TIPO_TAREA, USUARIO) 
    VALUES (NULL, '".$detalle."', '".$recomendaciones."', '".$fechainicio."', '".$horainicio."', '".$horafin."', 
    '".$solicitud."', '".$tipotarea."', '".$usuario."')";

    if (mysqli_query($link,$QuerySQL)){
        header('location: ../ListarTareas.php');
        
        } else {
            header('location: ../Error.php');
        }

?>