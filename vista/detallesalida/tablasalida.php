<?php
    require_once '../../controlador/detallesalida/detver.php';
?>
<html>
    <head>
        <title>Lista de detalles salida</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Id</td><td>Id Lote Entrada</td><td>Fecha</td><td>Linea Envasado</td><td>Hora Entrada</td><td>Hora Salida</td><td>Kg Utilizados</td><td>Observaciones</td>
            </tr>
            <?php
                //mientras la filas no sea nulas, recorremos el array y mostramos sus datos.
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</dato>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            ?>
        </table>
        <a href="../../modelo/detallesalida/detprincipal.php">Volver al formulario</a>
    </body>
</html>
