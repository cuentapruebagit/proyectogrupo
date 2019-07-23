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
            <h2>Formulario para actualizar registro</h2>
            <form action="index.php?m=actPersona" method="post">
                <label>Ingrese Nit:</label>
                <input type="number" class="" name="txtnitproveedor" required>
                
                <label>Ingrese Razon Soacial:</label>
                <input type="text" class="" name="txtrazonsocial" required>
                
                <label>Ingrese un Télefono:</label>
                <input type="text" class="" name="txttelefono" required>
                
                <label>Ingrese una Dirección:</label>
                <input type="text" class="" name="txtdireccion" required>
                
                <label>Ingrese El Nombre de Contacto:</label>
                <input type="text" class="" name="txtnombrecontacto" required>
                
                <label>Ingrese El Cargo del Contacto:</label>
                <input type="text" class="" name="txtcargocontacto" required>
                
                <label>Ingrese Un Celular</label>
                <input type="text" class="" name="txtcelular" required>
                
                <label>Ingrese La Página Web:</label>
                <input type="text" class="" name="txtpagweb" required>
                
                <button type="submit" class="btn btn-dark">Enviar</button>
                <br><br>    

                <a href="index.php?m=''">&nbsp;Volver al inicio&nbsp;</a>
            </form>
            

        </div>
    </body>
</html>