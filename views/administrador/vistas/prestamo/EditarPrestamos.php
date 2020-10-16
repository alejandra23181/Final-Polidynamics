<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Login.php");
    exit;
}
?>

<?php
    include('C:\xampp\htdocs\polidynamics\database\db.php');
    $id = $_GET['ID_PRESTAMO'];              
    $QuerySQL = "SELECT * FROM PRESTAMO PR
    INNER JOIN USUARIO US ON PR.USUARIO = US.ID_USUARIO
    INNER JOIN AULA AU ON PR.AULA = AU.ID_AULA
    INNER JOIN SOLICITUD SO ON PR.SOLICITUD = SO.ID_SOLICITUD WHERE ID_PRESTAMO = '".$id."'";
    $Resultado = mysqli_query($link, $QuerySQL);
     while($Filas = $Resultado->fetch_assoc()) {	
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PoliDynamics</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="icon" href="/PoliDynamics/style/image/IconoPoli.png" />
    <link rel="stylesheet" href="/PoliDynamics/views/docente/style/CrearSolicitudes.css" type="text/css" >
</head>
<body>

    <section id="sidebar"> 
    <div class="white-label">
    </div> 
  <nav class="menu">
  <div id="sidebar-nav">   
    <ul id="Secciones">
    <li class="active"><a href="#"> Home</a></li>
      <li><a href="#"> Gestión de tareas</a></li>
      <li><a href="vistas/inventario/ListarPrestamos.php"> Gestión de prestamos</a></li>
      <li><a href="#"> Gestión de disponibilidad</a></li>
      <li><a href="#"> Administración de prestamos</a></li>
      <li><a href="#"> Administración de solicitudes</a></li>
      <li><a href="#"> Administración de usuarios</a></li>
      <li><a href="vistas/inventario/ListarInventario.php"> Administración de inventario</a></li>
      <li><a href="#"> Auditoria</a></li>
      <li><a href="#"> Reportes</a></li>
      <li><a href="#"> Manual de usuario</a></li>     
      <li><a href="/polidynamics/views/login/Login.php"> Cerrar sesión</a></li>
      
    </ul>

  </div>
</nav>
    </section>
    <section id="content">
    <div id="header">
    <div class="header-nav">
      <div class="nav">
        <ul>
          <li class="nav-profile">
            <div class="nav-profile-image">
              <img src="/PoliDynamics/style/image/User.png" alt="profile-img" alt="profile image">
              <div class="nav-profile-name"><?php echo htmlspecialchars($_SESSION["username"]); ?></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <h1>MODIFICAR PRESTAMO</h1>
  <br>

  <form  action = "metodos/MetodoEditar.php">
        <div class="form-group">
        <input type="hidden" name="idprestamo" value="<?php echo $Filas['ID_PRESTAMO'] ?>">
            <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Fecha prestamo:</label><br>   
                        <input type="date" name="fecha_prestamo"  class="form-control" value="<?php echo $Filas['FECHA_PRESTAMO'] ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Fecha esperada prestamo:</label><br>   
                        <input type="date" name="fecha_esperada"  class="form-control" value="<?php echo $Filas['FECHA_PRESTAMO_ESPERADA'] ?>">
                    </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                    <div class="col-md-6 mb-3">
                    <label>Hora inicio:</label><br>   
                    <input type="time" name="hora_inicio" class="form-control" value="<?php echo $Filas['HORA_INICIO'] ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                    <label>Hora fin:</label><br>   
                    <input type="time" name="hora_fin" class="form-control" value="<?php echo $Filas['HORA_FIN'] ?>">
                    </div>
                    <input  type="hidden" name="usuario" value="<?php echo $Filas['username'] ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                    <div class="col-md-6 mb-3">
                    <label>Aula:</label><br>
                    <select name="aula" class="form-control">
                    <option value="<?php echo $Filas['ID_AULA'] ?>" enable selected hidden><?php echo $Filas['NUMERO_AULA'] ?></option>
                        <?php 
                            $Query = "SELECT ID_AULA, NUMERO_AULA FROM AULA";
                            $Resultado = mysqli_query($link, $Query);
                            while($Filas = $Resultado->fetch_assoc()){
                                echo '<option value="'.$Filas[ID_AULA].'">'.$Filas[NUMERO_AULA].'</option>';   
                            }
                        ?>
                    </select>
                    </div>
            </div>
        </div>
    <br>
    <button class="btn btn-primary" type="submit"><strong> Actualizar prestamo</strong></button>
    </form>
    <?php } ?>
  </section>
</body>
</html>