<!DOCTYPE html>
<html>
<head>
	<title>UTN | Proyecto</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/bootstrap.css");?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("js/bootstrap.js");?>"></script>
    
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<ul class="nav navbar-nav">
						<li><a href="http://utn.ac.cr/">UTN</a></li>	
					</ul>
				</div>
				<div class="nav navbar-nav navbar-left">
					<li><a href="<?php echo base_url("");?>">Dashboard</a></li>
					<li><a href="<?php echo base_url("index.php/Carreras/index");?>">Carreras</a></li>
					<li><a href="<?php echo base_url("index.php/Estudiantes/index");?>">Estudiantes</a></li>
					<li><a href="<?php echo	base_url("index.php/Usuario/index")?>">Usuarios</a></li>
					<li><a href="<?php echo	base_url("index.php/Cualidad/index")?>">Cualidad</a></li>
					<li><a href="<?php echo	base_url("index.php/Tecnologia/index")?>">Tecnologia</a></li>
					<li><a href="<?php echo	base_url("index.php/Proyecto/index")?>">Proyectos</a></li>
					<li><a href="<?php echo	base_url("index.php/Cursos/index")?>">Cursos</a></li>
					<li><a href="#">Cerrar Sesion</a></li>
				</div>
			</div>
	</nav>
	<div id="confimg">
	<img id="imgextencion" src="http://www.utn.ac.cr/images/extension.png">
    <img id="imgcarreras"src="http://www.utn.ac.cr/images/carreras.png">
    <img id="imgestudiantes"src="http://www.utn.ac.cr/images/estudiantes.png">
</div>
</body>
</html>