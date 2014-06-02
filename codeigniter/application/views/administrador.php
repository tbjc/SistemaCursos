<?php
if ($nom == null) {
	$this->load->view('logueo', $data);
}
?>
<!doctype html>
<html lang="es">
<head>
	<title>administrador</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/estilo2.css">
	<script src="<?=base_url();?>js/jquery-2.1.0.js"></script>
	<script src="<?=base_url();?>js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>js/funciones.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#acolapsar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand"><?php echo $nom ?></a>
			</div>
			<div class="collapse navbar-collapse" id="acolapsar">
				<ul class="nav navbar-nav">
					<li><a href="#"><span class="glyphicon glyphicon-home"></span>  Inicio</a></li>
					<li><a href="" id="AbreConfig"><span class="glyphicon glyphicon-wrench"></span>  Configuracion personal</a></li>
				</ul>
				<ul class="nav navbar-nav" id="ocultar">
					<li><a href="" id="AbreRegistro2"><span class="glyphicon glyphicon-asterisk"></span> Registro de cursos</a></li>
					<li><a href="" id="AbreSintesis2"><span class="glyphicon glyphicon-paperclip"></span> Síntesis Curricular</a></li>
					<li><a href="" id="AbreMaestros2"><span class="glyphicon glyphicon-pencil"></span> Registro de maestros</a></li>
					
				</ul>
				<ul class="nav navbar-nav">
					<li><a href=""><span class="glyphicon glyphicon-hand-right"></span>  Salir</a></li>
				</ul>	
			</div>

		</div>
	</nav>
	<div class="container espacio-top">
		<div class="row">
			<div class="col-md-3">
				<ul class="nav nav-list well">
					<li class="nav-header">Tareas</li>
					<li class="divider"></li>
					<li><a href="" id="AbreRegistro"><span class="glyphicon glyphicon-asterisk"></span> Registro de cursos</a></li>
					<li><a href="" id="AbreSintesis"><span class="glyphicon glyphicon-paperclip"></span> Síntesis Curricular</a></li>
					<li><a href="" id="AbreMaestros"><span class="glyphicon glyphicon-pencil"></span> Registro de maestros</a></li>
				</ul>
			</div>
			<div class="col-md-8">
				<div class="well" id="welcome">
					<p id="parrafo">
						Bienvenido administrador <?php echo $nom?>, seleccione una de las opciones a realizar en el menu superior
					</p>
					<img src="<?=base_url();?>img/alumnos.jpg">
					
				</div>
				<div class="well" id="RegistroCurso">
					<h3>Registro de Cursos</h3>
					<form method="post">
						<label class="">Nombre del acto academico:</label>
						<input type="text" class="estilo2" name="nombre">
						<div class="d6">
							<label class="espacio">Modalidad:</label>
							<select name="" class="estilo2">
								<option>virtual</option>
								<option>presencial</option>
							</select>
						</div>
						<div class="d6">
							<label class="espacio">Tipo de acto académico:</label>
							<select name="" class="estilo2">
								<option>Curso</option>
								<option>Seminario</option>
								<option>Taller</option>
							</select>
						</div>
						<label class="espacio">Entidad académica o dependencia:</label><br>
						<label>Nombre de la entidad</label>
						<input type="text" class="estilo2">
						<label class="linea">Domicilio</label>
						<input type="text" class="estilo2">
						<label class="linea">Ciudad</label>
						<input type="text" class="estilo2">
						<label class="linea">Correo electronico:</label>
						<input type="text" class="estilo2">
						<label class="linea">Telefono:</label>
						<input type="text" class="estilo2">
						<div class="d6">
							<label>Area academica</label>
							<select name="" class="estilo2">
								<option>Artes</option>
								<option>Biológico-Agropecuaria</option>
								<option>Ciencias de la Salud</option>
								<option>Económico-Administrativa</option>
								<option>Humanidades</option>
								<option>Técnica</option>
							</select>
						</div>
						<div class="d6">
							<label>Categorías de atención</label>
							<select name="" class="estilo2">
								<option>Formación para el trabajo</option>
								<option>Formación para la vida</option>
								<option>Actualización profesional disciplinaria y docente</option>
								<option>Formación extracurricular</option>
							</select>
						</div>
						<label>Sede:</label><br>
						<label>Nombre de la entidad</label>
						<input type="text" class="estilo2">
						<label class="linea">Domicilio</label>
						<input type="text" class="estilo2">
						<label class="linea">Ciudad</label>
						<input type="text" class="estilo2">
						<label>Organizador</label><br>
						<input type="text" class="estilo2">
						<label>Remuneracion</label>
						<select name="" class="estilo2 recortado">
							<option>Remunerado</option>
							<option>No Remunerado</option>
						</select>
						<label>Instructor o Especialista invitado:</label><br>
						<input type="text" class="estilo2">
						<label>Remuneracion</label>
						<select name="" class="estilo2 recortado">
							<option>Remunerado</option>
							<option>No Remunerado</option>
						</select>
						<div class="d3">
							<label>Cuota de recuperación propuesta:</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d3">
							<label>Cupo mínimo y máximo:</label>
							<input type="text" class="estilo2" placeholder="minimo">
							<input type="text" class="estilo2" placeholder="maximo">
						</div>
						<div class="d3">
							<label>Fecha inicio/ término::</label>
							<input type="text" class="estilo2" placeholder="inicio">						
							<input type="text" class="estilo2" placeholder="termino">
						</div>
						<div>
							<label>DESCRIPCIÓN</label>
							<label>Dirigido a:</label>
							<input type="text" class="estilo2">
							<label>Requisitos de ingreso:</label>
							<input type="text" class="estilo2">
							<label>Objetivo general:</label>
							<textarea class="estilo2"></textarea>
							<label>Temario:</label>
							<textarea class="estilo2"></textarea>
							<label>Acreditación y procedimientos de evaluación:</label>
							<textarea class="estilo2"></textarea>
							<label>Bibliografía::</label>
							<textarea class="estilo2"></textarea>
						</div>
						<input type="submit" class="btn btn-primary" >
					</form>
				</div>
				<div class="well" id="SintesisCurricular">
					<h3>Sintesis Curricular</h3>
					<label>Datos personales</label>
					<input type="text" class="estilo2" placeholder="nombre   apellidos">
					<div class="d3">
						<label>Fecha de nacimiento:</label>
						<input type="text" class="estilo2" placeholder="DD/MM/AA">
					</div>
					<div class="d3">
						<label>Lugar de nacimiento:</label>
						<input type="text" class="estilo2">
					</div>
					<div class="d3">
						<label>funcion</label>
						<select class="estilo2">
							<option>Organizador</option>
							<option>Instructor</option>
							<option>Especialista Invitado</option>
						</select>
					</div>
					<div id="dir" >
						<label>Direccion</label><br>
						<div class="d4">
							<label>calle</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d4">
							<label>No.</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d4">
							<label>colonia</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d4">
							<label>ciudad/estado</label>
							<input type="text" class="estilo2">
						</div>
					</div>
					<div id="Tel" class="parte">
						<label>Telefonos</label><br>
						<div class="d3">
							<label>Telefono Particular</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d3">
							<label>Telefono Trabajo</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d3">
							<label>Telefono Celular</label>
							<input type="text" class="estilo2">
						</div>
						
					</div>
					<div class="parte">
						<label>Idiomas</label><br>
						<div class="d4">
							<label>Nombre de idioma:</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d4">
							<label>% CONVERSACIÓN</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d4">
							<label>% COMPRENSIÓN</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d4">
							<label>% TRADUCCIÓN</label>
							<input type="text" class="estilo2">
						</div>
						
					</div>
					
					<div class="parte">
						<label>Escolaridad</label><br>
						<div class="d6">
							<label>escolaridad</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d6">
							<label>institucion</label>
							<input type="text" class="estilo2">
						</div>
						<input type="button" class="btn btn-primary" value="agregar">
					</div>
					<div class="parte">
						<label>Experiencia academica</label><br>
							<div class="d4">
							<label>Materia</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d4">
							<label>año</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d4">
							<label>semestre</label>
							<input type="text" class="estilo2">
						</div>
						<div class="d4">
							<label>institucion</label>
							<input type="text" class="estilo2">
						</div>
						<input type="button" class="btn btn-primary" value="agregar">
					</div>
					<div class="parte">
							<label>Distinciones</label><br>
							<div class="col-md-6">
							<label>distincion</label>
							<input type="text" class="estilo2">
							</div>
							<div class="col-md-6">
							<label>institucion</label>
							<input type="text" class="estilo2">
							</div>
							<input type="button" class="btn btn-primary" value="agregar">
						</div>
					<br><input type="button" class="btn btn-primary" value="Finalizar">
				</div>
				<div id="registroMaestros" class="well">
					<h3>Registro de maestros</h3>
					<label>Nombre</label>
					<input type="text" class="estilo2">
					<div class="segmento" id="asd">
						<label>Correo Electronico</label>
						<input type="text" class="estilo2">
					</div>
					<div class="segmento" id="sdf">
						<label>Correo Electronico</label>
						<input type="text" class="estilo2">
					</div>
					<input type="button" value="Registrar" class="btn btn-primary">
				</div>
				<div id="ConfigPersonal" class="well">
					<h2>Configuracion Personal</h2>
					<form>
						<div class="segmento">
							<label>Nombre</label>
							<input type="text" class="estilo2">
						</div>
						<div class="segmento">
							<label>Apellidos</label>
							<input type="text" class="estilo2">
						</div>
						<div class="segmento" id="asd">
							<label>Password</label>
							<input type="Password" class="estilo2">
						</div>
						<div class="segmento" id="sdf">
							<label>Confirma Password</label>
							<input type="Password" class="estilo2">
						</div>
						<input type="submit" value="Registrar" class="btn btn-primary">
					</form>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>