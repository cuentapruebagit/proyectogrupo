<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ventas</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style_venta.css">

    </head>

    <body>

        <div class="container">
            <h2>Formulario para eliminar registro de venta</h2>
            <form action="index.php?m=obtenerVenta" method="post">
                <label>Ingrese id de factura:</label>
                <input type="number" class="" name="txtid" required>
                <button type="submit" class="btn btn-dark">Enviar</button>    
                <br><br>    

                <a href="index.php?m=''">&nbsp;Volver al inicio&nbsp;</a>
            </form>

        </div>
    </body>
</html>