<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id15586349_root');
define('DB_PASSWORD', 'AlejandraMontoya123.');
define('DB_NAME', 'id15586349_polidynamics');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


    

    $PRIMER_NOMBRE_USUARIO=$_POST['PRIMER_NOMBRE_USUARIO'];
    $SEGUNDO_NOMBRE_USUARIO=$_POST['SEGUNDO_NOMBRE_USUARIO'];
    $PRIMER_APELLIDO_USUARIO=$_POST['PRIMER_APELLIDO_USUARIO'];
    $SEGUNDO_APELLIDO_USUARIO=$_POST['SEGUNDO_APELLIDO_USUARIO'];
    $TELEFONO=$_POST['TELEFONO'];
    $EMAIL=$_POST['EMAIL'];
    $TIPO_DOCUMENTO=$_POST['TIPO_DOCUMENTO'];
    $IDENTIFICACION=$_POST['IDENTIFICACION'];
    $GENERO=$_POST['GENERO'];
    $PERFIL=$_POST['PERFIL'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="INSERT INTO USUARIO (ID_USUARIO,PRIMER_NOMBRE_USUARIO,SEGUNDO_NOMBRE_USUARIO,PRIMER_APELLIDO_USUARIO,SEGUNDO_APELLIDO_USUARIO,
                                TELEFONO,EMAIL,TIPO_DOCUMENTO,IDENTIFICACION,GENERO,PERFIL,username,password) 
                VALUES (NULL,'$PRIMER_NOMBRE_USUARIO','$SEGUNDO_NOMBRE_USUARIO','$PRIMER_APELLIDO_USUARIO','$SEGUNDO_APELLIDO_USUARIO',
                        '$TELEFONO','$EMAIL','$TIPO_DOCUMENTO','$IDENTIFICACION','$GENERO',' $PERFIL','$username','$password')";

    $ejecutar=mysqli_query($link, $sql);

    if($ejecutar){
        header("Location: ../ListarUsuarios.php");

    }



?>