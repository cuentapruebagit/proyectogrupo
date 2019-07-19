<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CRUD - MVC - Productos</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>

	<body>
		<div class="container">
			<header>

				<div class="row">
					<div class="col-md-12">
						<a href="index.php?m=aproducto">&nbsp;Agregar Producto&nbsp;</a>
						<a href="index.php?m=eproducto">&nbsp;Eliminar Producto&nbsp;</a>
						<a href="index.php?m=acproducto">&nbsp;Actualizar Producto&nbsp;</a>
					</div>
				</div>

			</header>
			<br>
			<div class="row">
				<div class="col-md-12">

					<h2><u>Registro de productos</u></h2>


					<table>
						<thead>
							<tr>

								
								<td></td>
								<th> ID </th>
								<th>NOMBRE</th>
								<TH>PRECIO</TH>
								<th>DESCRIPCION</th>
								<th>NIT DEL PROVEEDOR</th>
							</tr>

						</thead>
						<tbody>
							<?php foreach($query as $data): ?>
							<tr>
								<td><?php echo $data['idproducto'] ?> </td>
								<td><?php echo $data['nombre'] ?> </td>
								<td><?php echo $data['precio'] ?> </td>
								<td><?php echo $data['descripcion'] ?> </td>
								<td><?php echo $data['nitproveedor'] ?> </td>

								<!--<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['nombre'] ?> </td>-->

							</tr>
							<?php endforeach; ?>        
						</tbody>
					</table>

				</div>
			</div>

			<script src="../js/bootstrap.js"></script>
			<script src="../js/jquery-3.4.1.js"></script>
		</div>
	</body>
</html>
