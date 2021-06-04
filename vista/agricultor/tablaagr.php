<?php
    require_once '../../controlador/agricultor/agriver.php';
?>
<html>
    <head>
        <title>Lista de Agricultores</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
    </head>
    <body>
        <table border="1" class="responsive">
            <tr>
                <td>Id</td><td>Nombre</td><td>Apellidos</td><td>Apodo</td><td>Zona</td><td>Direccion</td><td>Localidad</td><td>Provincia</td>
                <td>Codigo Postal</td><td>NIF</td><td>Observaciones</td>
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
        <a href="../../modelo/agricultor/agriprincipal.php">Volver al formulario</a>
    </body>
</html>

