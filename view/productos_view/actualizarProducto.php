<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CRUD - MVC - Producto</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>

	<body>

		<div class="container">
			<h2>Formulario Para Actualizar Producto</h2>
			<form action="index.php?m=actProducto" method="post">
				<label>Ingrese Id:</label><br>
				<input type="number" class="" name="txtid" required><br><br>
				<label>Nombre Del Producto:</label><br>
				<input type="text" class="" name="txtnombre" maxlength="50"  required><br><br>
				<label>Precio:</label><br>
				<input type="number" class="" name="txtprecio" min="0" max="9999999999" required><br><br>
				<div>
					<label>Nit proveedor:</label><br>
					<input type="number" class="" name="txtproveedor" required>
				</div>
				<br>
				<label >Descripcion</label><br>
				<textarea name="txtdescrip" id="txtdescrip" cols="30" rows="3"></textarea><br><br>
				
				<button type="submit" class="btn btn-primary">Enviar</button>
				<br><br>    

				<a href="index.php?m=''">&nbsp;Volver al inicio&nbsp;</a>
			</form>


		</div>
	</body>
</html>