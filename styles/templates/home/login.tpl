{include 'global/header.tpl'}

{include 'global/title.tpl'}


<div class="container-fluid nt-inicio">
		<h1 class="nt-h1"><strong>Sistema de <br>Apoyo <br>Administrativo</strong></h1>

		<p class="nt-p">Sistema para la generacion de formularios de <br>seguimiento
		y solicitud de nombramiento de docentes.</p>

</div>

<div class="container formulario">
	<form class="form-group">
		<div class="form-group">
			<h3><strong>Inicie sesion por favor</strong></h3><br>
			<input type="text" class="form-control" placeholder="nombre de usuario" name=""><br>
			<input id= "password" type="password" class="form-control" placeholder="contraseña" name=""><br>
			<input id= "button" type="button" class="btn btn-success" value="	Ingresar" name="">
		</div>
	</form>
</div>

{include 'global/subtitle.tpl'}

{include 'global/footer.tpl'}

<style type="text/css">
	
	div.formulario {
		width: 400px;
		border-radius: 5px;
		border: 1px solid #9E9E9E;
	}

</style>e	