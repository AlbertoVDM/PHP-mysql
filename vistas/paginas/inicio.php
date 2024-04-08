<?php

	$usuarios = ControladorFormularios::ctrSelecionarRegistros();


?>



<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Fecha</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach($usuarios as $key => $value): ?>

			<tr>
				<td><?php echo ($key+1)  ?></td>
				<td><?php echo $value["nombre"];  ?></td>
				<td><?php echo $value["email"];  ?></td>
				<td><?php echo $value["fecha"];  ?></td>
				<td>
					<div class="btn-group">
						<div class="btn btn-warning">Editar</div>
						<div class="btn btn-danger">Eliminar</div>
					</div>
				</td>
			</tr>

		<?php endforeach?>
	</tbody>
</table>