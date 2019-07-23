<!DOCTYPE HTML5>
<html>
    <head>
      <?php  require_once ?> 'controller/detallefactura_model.php';
        <title>Ejercicios prácticos HTML5</title>
        <meta charset="utf-8">     
    </head>
    <body>
        <table border="1">
            <caption>Detalle de Factura</caption>
            <tr>
                <th>ID Factura</th>
                <th>ID Producto</th>
                <th>Precio $</th>
                <th>Cantidad</th>
                <th>Subtotal $</th>

            </tr>
            <tr>
                <td>
                <!Generamos un numero aleatorio para ser el # de Factura,este no se repite---->
                  <?php
                    $numeros = range(1,15);
                    shuffle ($numeros);
                    foreach ($numeros as $numeros) {
                        echo "$numeros";
                    }
                    ?>

               


                </td>
                <td>001</td>
                <td><?php
                    
                    echo $idproducto      ?></td>
                <td>4</td>
                <td>4000</td>

            </tr>
        </table>
    </body>
</html>