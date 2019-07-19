<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ventas</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>

    <body>

        <div class="container">
            <h2>Formulario nuevo registro de venta</h2>

            <form action="index.php?m=guardar" method="post">
                <label>Ingrese fecha de compra:</label>
                <input type="text" class="" name="txtfecha" required><br>
                <label>Ingrese cedula del cliente:</label>
                <input type="number" class="" name="txtcedula" required><br>
                <label>Ingrese total factura:</label>
                <input type="number" class="" name="txtfactura" required><br>
                <button type="submit" class="btn btn-dark">Guardar</button>
                <br><br>    

                <a href="index.php?m=''">&nbsp;Volver al inicio&nbsp;</a>
            </form>




        </div>

    </body>
</html>