<?php
    require_once '../../controlador/tratamiento/traver.php';
?>
<html>
    <head>
        <title>Tratamiento</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Id</td><td>Fecha</td><td>IdCuaderno</td><td>Tratamiento</td><td>Observaciones</td>
            </tr>
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
        <a href="../../modelo/tratamiento/traprincipal.php">Volver al formulario</a>
    </body>
</html>

