<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD - MVC - Personas</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>

    <body>

        <div class="container">
            <h2>Formulario nuevo registro</h2>

            <form action="index.php?m=guardar" method="post">
                <label>Ingrese el Nit de la empresa:</label>
                <input type="int" class="" name="txtnitproveedor" required>
                <label>Ingrese la razón social:</label>
                <input type="text" class="" name="txtrazonsocial" required>
                <label>Ingrese el teléfono:</label>
                <input type="text" class="" name="txttelefono" required>
                <label>Ingrese la dirección:</label>
                <input type="text" class="" name="txtdireccion" required>
                <label>Ingrese el nombre del contacto:</label>
                <input type="text" class="" name="txtnombrecontacto" required>
                <label>Ingrese el cargo del contacto:</label>
                <input type="text" class="" name="txtcargocontacto" required>
                <label>Ingrese el número celular del contacto:</label>
                <input type="text" class="" name="txtcelular" required>
                <label>Ingrese la página web:</label>
                <input type="text" class="" name="txtpagweb" required>
                <button type="submit" class="btn btn-dark">Guardar en base de datos</button>
                <br><br>    

                <a href="index.php?m=''">&nbsp;Volver al inicio&nbsp;</a>
            </form>




        </div>

    </body>
</html>