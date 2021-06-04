<?php
    require_once '../../controlador/parte/parver.php';
?>
<html>
    <head>
        <title>Parte de incidencias</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Id</td><td>Fecha</td><td>Incidencia</td><td>Solucion</td><td>Observaciones</td><td>Lote de entrada</td><td>Lote de salida</td>
            <?php
                //mientras la filas no sea nulas, recorremos el array y moostramos sus datos.
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
        <a href="../../modelo/parte/parprincipal.php">Volver al formulario</a>
    </body>
</html>