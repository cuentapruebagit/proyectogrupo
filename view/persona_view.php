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
            <header>

                <div class="row">
                    <div class="col-md-12">
                        <a href="index.php?m=persona">&nbsp;Nuevo Registro&nbsp;</a>
                        <a href="index.php?m=ePersona">&nbsp;Eliminar Registro&nbsp;</a>
                        <a href="index.php?m=aPersona">&nbsp;Actualizar Registro&nbsp;</a>
                    </div>
                </div>

            </header>
            <br>
            <div class="row">
                <div class="col-md-12">

                    <h2><u>Registro de personas</u></h2>


                    <table>
                        <thead>
                            <tr>

                                <th>Id</th>
                                <td></td>
                                <th> Nombre </th>

                            </tr>

                        </thead>
                        <tbody>
                            <?php foreach($query as $data): ?>
                            <tr>
                                <td><?php echo $data['id'] ?> </td>
                                <td></td>

                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['nombre'] ?> </td>

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
