<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/estilo3.css">
	</head>
	<body>
		<div class="navbar navbar-default">
			<div class="container">
				<div class="nav navbar-nav navbar-left">
					<h2>Sistema del Maestro</h2>
				</div>
				<div class="nav navbar-nav navbar-right">
					<img src="http://0.static.wix.com/media/b62472_ecfc7d3c15d043a58e48fe9b899a26f8.png_1024" id="perfil">
					<input id="salir" type="button" class="btn btn-default" value="Salir">
				</div>
			</div>
		</div>
		<div class="contenido">
			<h3><?php echo $nom ?></h3>
				<a href=""  id="invitacion">Invitaciones</a>
				<a href="" id="reporte">Reportes</a>
				<a href="" id="cursos">Mis cursos</a>
		</div>
	</body>
</html>