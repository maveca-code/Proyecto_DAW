<?php
    require_once '../../controlador/comprador/comver.php';
?>
<html>
    <head>
        <title>Lista de Compradores</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
    </head>
    <body>
        <p class="texto">Lista de Compradores</p>
   
        <table border="1">
            <tr>
                <td>Id</td><td>Empresa</td><td>Direccion</td><td>Localidad</td><td>Provincia</td>
                <td>Codigo Postal</td><td>NIF</td><td>Pais</td><td>Almacen</td><td>Observaciones</td>
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
        <a href="../../modelo/comprador/comprincipal.php">Volver al formulario</a>
    </body>
</html>