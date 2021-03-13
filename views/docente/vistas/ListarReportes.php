<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PoliDynamics</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="icon" href="/PoliDynamics/style/image/IconoPoli.png" />
    <link rel="stylesheet" href="../style/Reportes.css" type="text/css" >
</head>
<body>

    <section id="sidebar"> 
    <div class="white-label">
    </div> 
  <nav class="menu">
  <div id="sidebar-nav">   
  <ul id="Secciones">
    <li ><a href="/PoliDynamics/views/docente/Index.php"> Inicio</a></li>
      <li ><a href="\PoliDynamics\views\docente\vistas\solicitudes\ListarSolicitudes.php"> Gestión de solicitudes</a></li>
      <li ><a href="\PoliDynamics\views\docente\vistas\ListarTareas.php"> Seguimiento de solicitudes</a></li>
      <li ><a href="\PoliDynamics\views\docente\vistas\prestamo\ListarPrestamos.php"> Gestión de préstamos</a></li>
      <li><a href="\PoliDynamics\views\docente\vistas\ListarDisponibilidad.php"> Disponibilidad</a></li>
      <li><a href="\PoliDynamics\views\docente\vistas\ListarAuditoria.php"> Auditoría</a></li>
      <li class="active"><a href="\PoliDynamics\views\docente\vistas\ListarReportes.php"> Reportes</a></li>
      <li><a href="\PoliDynamics\views\docente\vistas\ManualUsuario.php"> Manual de usuario</a></li>     
      <li><a href="\PoliDynamics\Index.php"> Cerrar sesión</a></li>
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

  <h1>REPORTES Y ESTADÍSTICAS</h1>
  <br>
	<table class="table table-bordered">
		<thead>
			<tr>
        <th scope="col">Nombre del reporte</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="text-align: center;">Número de solucitudes realizadas en vida útil de la plataforma</td>
				<td style="width: 10px;"><button type="button" class="btn btn-danger">PDF</button></td>
      </tr>
      
      <tr>
				<td style="text-align: center;">Número de solucitudes reportadas y solucionadas</td>
				<td style="width: 10px;"><button type="button" class="btn btn-danger">PDF</button></td>
      </tr>
      
      <tr>
				<td style="text-align: center;">Número de solucitudes reportadas por sala</td>
				<td style="width: 10px;"><button type="button" class="btn btn-danger">PDF</button></td>
      </tr>

      <tr>
				<td style="text-align: center;">Reportes de movientos realizados en vida útil de la plataforma</td>
				<td style="width: 10px;"><button type="button" class="btn btn-danger">PDF</button></td>
      </tr>

      <tr>
				<td style="text-align: center;">Reportes de cada solucitud creada</td>
				<td style="width: 10px;"><button type="button" class="btn btn-danger">PDF</button></td>
      </tr>
      
		</tbody>
	</table>
  
      
  </section>


</body>
</html>