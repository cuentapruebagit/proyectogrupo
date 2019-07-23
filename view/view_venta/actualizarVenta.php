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
            <h2>Formulario para actualizar registro de venta</h2>
            <form action="index.php?m=actVenta" method="post">
                <label>Ingrese Id de factura:</label>
                <input type="number" class="" name="txtid" required><br>
                <label>Ingrese fecha de venta:</label>
                <input type="text" class="" name="txtfecha1" required><br>
                <label>Ingrese la cedula:</label>
                <input type="number" class="" name="txtcedula1" required><br>
                <label>Ingrese total factura de venta:</label>
                <input type="number" class="" name="txtfactura1" required><br>
                <button type="submit" class="btn btn-dark">Enviar</button>
                <br><br>    

                <a href="index.php?m=''">&nbsp;Volver al inicio&nbsp;</a>
            </form>
            

        </div>
    </body>
</html>