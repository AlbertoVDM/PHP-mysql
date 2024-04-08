<h1>Ingreso</h1>

<div class="d-flex justify-content-center text-center">
	<form>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="nombre" class="form-control" id="nombre" name="ingresoEmail">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="pwd" class="form-control" id="pwd" name="ingresoPassword">
		</div>
		<div class="form-group form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox"> Remember me
			</label>
		</div>
		</div>

		<?php

		$ingreso = new ControladorFormularios();
		$ingreso->ctrIngreso();

		?> 

		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</div>
