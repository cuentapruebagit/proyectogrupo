<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CLIENTES</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>

	<body>
		<div class="container">
			<div class="row" style="margin-top: 20px; margin-botton: 30px;">
				<div style="width: 50%;
							border: solid; border-color: blue;margin-top: 20px; display: block;margin: auto;">
					<div class="col-md-12 col-xs-12" style="text-align: center;">
						<h1 style="font-family: -webkit-body;">CLIENTES</h1>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 20px;" >
				<div class="col-md-4 col-xs-12">
					<button style="width: 100%;" type="button" class="btn btn-secondary"><a href="../indexcliente.php?" style="color: white;"> Agregar Nuevo Cliente</a></button>
				</div>
				<div class="col-md-4 col-xs-12" >
					<button style="width: 100%; " type="button" class="btn btn-secondary"><a href="../indexcliente.php?" style="color: white;llama=insertt" >Eliminar Clientes</a></button>
				</div>
				<div class="col-md-4 col-xs-12">
					<button style="width: 100%;" type="button" class="btn btn-secondary"><a href="../indexcliente.php?" style="color: white;">Editar info Cliente</a></button>
				</div>
			</div>
		</div>
		<div>
			<div class="container" style="margin-top: 20px;">
				<h2><u>Registro de personas</u></h2>
			</div>
			<div class="row" style=" margin: 26px; text-align: center;font-size: 20px;background: #c7c7c7;">
				<table style="display: block;margin: auto;">
					<thead>
						<tr>
							<th>Id</th>
							<td></td>
							<th> Nombre </th>
							<td></td>
							<th> Telefono </th>
							<td></td>
							<th> Direccion </th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($query as $data): ?>
						<tr>
							<td><?php echo $data['cedula'] ?> </td>
							<td></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['nombre'] ?> </td>
							<td></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['telefono'] ?> </td>
							<td></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['direccion'] ?> </td>
						</tr>
						<?php endforeach; ?>        
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
