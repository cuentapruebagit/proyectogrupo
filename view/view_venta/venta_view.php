<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD - MVC - Venta</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <div class="contenedor">
            <header>
                <div class="logo">
                    <img src="imagenes/logo.png" alt="">

                </div>
                <nav class="menu">
                    <a href="index.php?m=persona">Nuevo Registro</a>
                    <a href="index.php?m=ePersona">Eliminar Registro</a>
                    <a href="index.php?m=aPersona">Actualizar Registro</a>
                </nav>
            </header>
            <br>
            <div class="row">
                <div class="col-md-12">

                    <h2><u>Lista de ventas</u></h2>


                    <table>
                        <!-- <thead> -->
                            <tr>

                                <th>Id Factura</th>
                                <td></td>
                                <th>Fecha</th>
                                <td></td>
                                <th>Cedula</th>
                                <td></td>
                                <th>Total Factura</th>
                                <td></td>

                        <!-- </thead> -->
                        <!-- <tbody> -->
                            <?php foreach ($query as $data): ?>
                            <tr>
                                <td><?php echo $data['idfactura'] ?> </td>
                                <td></td>

                                <td><?php echo $data['fecha'] ?> </td>
                                 <td></td>
                                
                                <td><?php echo $data['cedula'] ?> </td>
                                <td></td>
                                
                                <td><?php echo $data['totalfactura'] ?> </td>
                                <td></td>
                                                                


                            </tr>
                            </tr>
                            <?php endforeach;?>
                        <!-- </tbody> -->
                    </table>

                <!-- </div>
            </div> -->
                </article>
            </section>
            <aside>
                <div class="ad">Add</div>
                <div class="ad">Add</div>
            </aside>

            <script src="../js/bootstrap.js"></script>
            
        </div>
    </body>

</html>
