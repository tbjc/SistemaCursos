<!doctype html>
<html lang="es">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/estilo.css">
		<style type="text/css">
		a{
			text-align: right;
		}
		</style>
		<script type="text/javascript" src="<?=base_url();?>js/jquery-2.1.0.js"></script>
		<script type="text/javascript" src="<?=base_url();?>js/jquery.validate.js"></script>
		<script type="text/javascript" src="<?=base_url();?>js/validarLogueo.js"></script>
		<script type="text/javascript" src="<?=base_url();?>js/bootstrap.js"></script>
	</head>
	<body>
		<div id="encabezado">
			<img src="<?=base_url();?>img/fei.png" class="cabeza imagenCabeza" id="fei">
			<h1 class="cabeza">Sistema de control FEI</h1>
			<img src="<?=base_url();?>img/uv.png" class="cabeza imagenCabeza" id="uv">
		</div>
		<div id="contenedor">
			<div id="forma">
				<form id="formLogin" class="" action="<?php echo base_url('index.php/welcome/login');?>" method="post">
					<img src="<?=base_url();?>img/login.png" id="logueo">
					<input type="text" class="form-control margen" placeholder="Login" name="usuario" id="usuario">
					<input type="password" class="form-control margen" placeholder="Password" name="password" id="password">
					<?php if ($error == 0): ?>
						<div class="alert alert-danger">
  							<strong>Error</strong> alguno de los campos esta vacio
						</div>
					<?php endif ?>
					<?php if ($error == 1): ?>
						<div class="alert alert-danger">
  							<strong>Error</strong> Usuario es incorrecto
						</div>
					<?php endif ?>
					<?php if ($error == 2): ?>
						<div class="alert alert-danger">
  							<strong>Error</strong> contraseña incorrecta
						</div>
					<?php endif ?>
					<?php if ($error == 5): ?>
						<div class="alert alert-danger">
  							<strong>Correo enviado</strong>
						</div>
					<?php endif ?>
					<input type="submit" class="btn btn-primary tamano" value="Entrar">
					<a style="text-align: left;" href="#Recuperar" data-toggle="modal">Recuperar Contraseña</a>
				</form>
			</div>
			<div class="modal fade" id="Recuperar" tabindex="-1" role="dialog" aria-labelledly="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<input type="button" class="close" data-dismiss="modal" aria-hidden="true" value="&times;">
							<h4>Recuperacion de contraseña</h4>
						</div>
						<div class="modal-body">
							<form action="<?php echo base_url('index.php/welcome/recuperaPass');?>" method="post">
								<label class="separado">Escriba su correo al cual van a ser enviado los datos</label>
								<input name="nmail" type="text" class="form-control separado" placeholder="correo@cuenta.com">
								<input type="submit" class="btn btn-primary separado" value="Enviar correo" >
								<p>En caso de que los datos sean correctos recibirá la clave de usuario y la contraseña</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>