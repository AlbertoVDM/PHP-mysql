<div class="d-flex justify-content-center text-center">
<form class="p-5 bg-light" method="post">

<div class="form-group" method="post">
	<label for="nombre">Nombre:</label>
	<div class="input-group">
		<span class="input-group-text"><i class="fa-thin fa-user"></i></span>
		<input type="nombre" class="form-control" id="nombre" name="registroNombre">
	</div>
	
</div>

<div class="form-group">
	<label for="email">Correo electrónico:</label>
	<div class="input-group">
		<span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
		<input type="email" class="form-control" id="email" name="registroEmail">
	</div>
	
</div>

<div class="form-group">
	<label for="psw">Contraseña:</label>
	<div class="input-group">
		<span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
		<input type="pwd" class="form-control" id="pwd" name="registroPassword">
	</div>
	
</div>

<?php

$registro = ControladorFormularios::ctrRegistro();	


if ($registro == "ok"){

	echo '<div class"alert alert-success">Registrado correctamente</div>';
}

?> 

<button type="submit" class="btn btn-primary">Enviar</button>


</form>
</div>