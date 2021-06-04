<?php
    require_once '../../controlador/loteentrada/loenver.php';
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
                <td>Id</td><td>Fecha Entrada</td><td>Hora Entrada</td><td>Agricultor</td><td>Articulo</td><td>Peso Bruto</td><td>Peso Tara</td><td>Bultos</td><td>Descuento</td>
                <td>Id Cuaderno</td><td>Transportista</td><td>Matricula</td><td>Gastado</td><td>Fecha Salida</td><td>Hora Salida</td><td>Referencia</td><td>Observaciones</td>
            </tr>
            <?php
                //mientras la filas no sea nulas, recorremos el array y moostramos sus datos.
                while(($num_filas<10) &&($damefilas=$resultado->fetch_assoc())){
                    echo "<tr>";
                    foreach($damefilas as $filas){
                        echo "<td>".$filas."</dato>";
                    }//fin foreach
                    //$filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                    $num_filas++;
                }//fin while
            ?>
        </table>
        <?php
            //si quedan más valoraciones en el conjunto de resultados, muestro el enlace de "Ver más"
            if ($damefilas = $resultado -> fetch_assoc()){
                echo "<div align=center><b><a href=\"../../vista/loteentrada/loentabla.php?vermas=$damefilas[Id].\">Ver más mensajes</a></b></div><br>";
            }else{
                echo "<div align=center><b>No hay más datos</b></div><br>";
            }
        ?>
        <a href="../../modelo/loteentrada/loenprincipal.php">Volver al formulario</a>
    </body>
</html>