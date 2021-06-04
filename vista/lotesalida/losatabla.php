<?php
    require_once '../../controlador/lotesalida/losaver.php';
?>
<html>
    <head>
        <title>Lista de lote entrada</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Id</td><td>Fecha</td><td>Id Comprador</td><td>Id Articulo</td><td>Completado</td><td>Hora Completado</td><td>Transportista</td><td>Cargado</td><td>Observaciones</td>
            </tr>
            <?php
                //mientras la filas no sea nulas, recorremos el array y moostramos sus datos.
                while(($num_filas<10) &&($damefilas=$resultado->fetch_assoc())){
                    echo "<tr>";
                    foreach($damefilas as $filas){
                        echo "<td>".$filas."</dato>";
                    }//fin foreach
                    echo "</tr>";
                    $num_filas++;
                }//fin while
            ?>
        </table>
        <?php
            //si quedan más valoraciones en el conjunto de resultados, muestro el enlace de "Ver más"
            if ($damefilas = $resultado -> fetch_assoc()){
                echo "<div align=center><b><a href=\"../../vista/lotesalida/losatabla.php?vermas=$damefilas[Id].\">Ver más mensajes</a></b></div><br>";
            }else{
                echo "<div align=center><b>No hay más datos</b></div><br>";
            }
        ?>
        <a href="../../modelo/lotesalida/losaprincipal.php">Volver al formulario</a>
    </body>
</html>