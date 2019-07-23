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
		<center>

			<div class="container">
				<h2>Formulario Nuevo Producto</h2>

				<form action="index.php?m=guardar" method="post">
					<label>Nombre Del Producto:</label><br>
					<input type="text" class="" name="txtnombre" maxlength="50"  required><br><br>
					<label>Precio:</label><br>
					<input type="number" class="" name="txtprecio" min="0" max="9999999999" required><br><br>
                    <div>
                        <label>Nit proveedor:</label><br>
                    <select name="sel_proveedor" class="form-control">
                    <option value="0">--Selecciona--</option>
                        <?php foreach($query as $row) :  ?>
                        <option value="<?php echo $row['nitproveedor']?>"><?php echo $row['nitproveedor'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                    <br>
					<label >Descripcion</label><br>
					<textarea name="txtdescrip" id="txtdescrip" cols="30" rows="3"></textarea><br><br>
					<br><br><br>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<br><br>    

					<a href="index.php?m=''">&nbsp;Volver al inicio&nbsp;</a>
				</form>




			</div>
		</center>
	</body>
</html>