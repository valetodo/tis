<?php /* Smarty version 3.1.27, created on 2016-11-08 15:24:02
         compiled from "C:\wamp64\www\proyectoTis\tis\styles\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:214865821ee12804269_63910251%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0edd3f576cb0d14b7320037783a1e407bc29d6ff' => 
    array (
      0 => 'C:\\wamp64\\www\\proyectoTis\\tis\\styles\\templates\\home\\index.tpl',
      1 => 1478618630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214865821ee12804269_63910251',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5821ee1286f145_65146239',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5821ee1286f145_65146239')) {
function content_5821ee1286f145_65146239 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '214865821ee12804269_63910251';
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>

	<link rel="stylesheet" href="styles/css/bootstrap/bootstrap-theme.css">
    <link rel="stylesheet" href="styles/css/bootstrap/bootstrap-theme.min.css">
    <link rel="stylesheet" href="styles/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="styles/css/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="styles/css/index.css">

</head>
<body>

	<div class="container-fluid nt-inicio">
		<h1 class="nt-h1"><strong>Sistema de <br>Apoyo <br>Administrativo</strong></h1>

		<p class="nt-p">Sistema para la generacion de formularios de <br>seguimiento
		y solicitud de nombramiento de docentes.</p>

	</div>

	<div class="container-fluid formulario">
		<form class="form-group">
			<div class="form-group">
				<h3><strong>Inicie sesion por favor</strong></h3><br>
				<input type="text" class="form-control" placeholder="nombre de usuario" name=""><br>
				<input type="password" class="form-control" placeholder="contraseña" name=""><br>
				<input type="button" class="btn btn-success" value="Ingresar" name="">
			</div>
		</form>
	</div>

	<div class="container pie-de-pagina">
		<div class="row">
			<div class="col-sm-4">
				<h4><strong>Paginas relacionas</strong></h4>
				<p><a href="">UMSS</a></p>
				<p><a href="">Facultad de Ciencias y Tecnologia</a></p>

			</div>

			<div class="col-sm-4">
			<br>
			<h4><a href="">Departamento de Informatica y Sistemas</a></h4>
			</div>

			<div class="col-sm-4">
				<h4>Desarrollado por NextSoft srl.</h4>
				<p><a href="">www.nextsoft.com.bo</a></p>
				<p><a href="">nextsoft@gamil.com</a></p>
			</div>

		</div>
	</div>

</body>
</html><?php }
}
?>