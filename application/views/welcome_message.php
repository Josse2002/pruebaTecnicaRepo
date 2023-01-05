<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prueba tecnica</title>
</head>
<body>
	<h2>Prueba tecnica</h2>
	<table>
	<thead>
		<tr>
		<th>ID</th>
		<th>codigo</th>
		<th>Nombre</th>
		<th>Descripción</th>
		<th>Tipo</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($printers as $printer): ?>
			<tr>
				<td><?php echo $printer->id; ?></td>
				<td><?php echo $printer->codigo; ?></td>
				<td><?php echo $printer->nombre; ?></td>
				<td><?php echo $printer->descripcion; ?></td>
				<td><?php echo $printer->tipo_nombre; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
	</table>


</body>
</html>