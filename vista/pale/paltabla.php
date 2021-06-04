<?php
    require_once '../../controlador/pale/palver.php';
?>
<html>
    <head>
        <title>Palés</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
    </head>
    <body>
        <?php
            echo "<table>"
            . "<tr>";
               
                echo "<td>ID</td><td>Fecha salida</td><td>Lote Salida</td><td>Bruto</td><td>Tara</td><td>Neto</td><td>Bultos</td><td>Piezas</td>"
                . "<td>Envase</td><td>Linea</td><td>Observaciones</td><td>Fecha pale</td>";
               
                $totalneto=0;
                echo "</tr>";     
                while($registro=$resultado->fetch_array(MYSQLI_NUM)){
                echo "<tr>";
                foreach($registro as $fila=>$valor){
                    if($fila=='1'){
                        $valor= mysql_normal($valor);
                    }
                    echo "<td>$valor</td>";
                }//fin foreach
                $totalneto=$totalneto+$registro[5];
                echo "</tr>";
            }//fin while

             echo "<tr><td></td><td></td><td><strong>TOTAL NETO</strong></td><td></td><td></td><td><strong>$totalneto</strong></td>";
             $palets=mysqli_num_rows($resultado);											
             echo "<td>$palets palets</td></tr>";

            echo "</table>";
            echo "<br><a href='palprincipal.php'> Volver al formulario...</a>";
         ?>
    </body>
</html>