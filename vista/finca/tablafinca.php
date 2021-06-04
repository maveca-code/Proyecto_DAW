<?php
    require_once '../../controlador/finca/finver.php';
?>
<html>
    <head>
        <title>Lista de Fincas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Id</td><td>Paraje</td><td>Ruta</td><td>Termino</td><td>Provincia</td><td>Poligono</td><td>Parcela</td><td>Coordenadas GPS</td><td>Observaciones</td>
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
        <a href="../../modelo/finca/finprincipal.php">Volver al formulario</a>
    </body>
</html>