<?php
    session_start();
    echo '<strong>Hola ' .$_SESSION['usuario'].'</strong>';
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include '../../controlador/funciones.php';
    
    $buscacomprador="SELECT c.empresa, losa.fecha, a.articulo FROM lotesalida losa JOIN comprador c ON c.id=losa.idcomprador "
            . "JOIN articulo a ON a.id=losa.idarticulo WHERE losa.id=$idlotesalida";
    $resultado=$conexion -> query($buscacomprador);
    
    while($registro=$resultado->fetch_array(MYSQLI_NUM)){
        $comprador=$registro[0];
        $fecha= mysql_normal($registro[1]);
        $articulo=registro[2];
    }//fin while
    
    $ordenSQL="SELECT p.bruto AS bruto, p.tara AS tara, p.bruto-p.tara AS neto, CONCAT(f.envase,', ',p.piezas,' piezas')AS formatoPiezas, p.bultos AS bultos, "
            . "p.observaciones AS ObsP, p.id AS idpale FROM pale p JOIN formato f ON p.idformato=f.id WHERE p.lotesalida=$idlotesalida ORDER BY formatoPiezas";
    $resultadoSQL=$conexion -> query($ordenSQL);
    $filas=$resultadoSQL->fetch_row();
?>

<html>
    <head>
        <title>Detalles lotes de salida</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <!--Muestro los resultados de las consulta en el cuerpo del documento-->
        <?php
            if($filas==0){
                echo "<p>No tiene nada pesado aún.</p><br>";
                echo "<a href='../../modelo/lotesalida/losaprincipal.php'> Volver al formulario...</a>";
            }else{
                echo "<p>Detalle del lote de salida número <strong>$idlotesalida</strong>, día <strong>$fecha</strong> y comprador: <strong>$comprador</strong> con "
                        . "articulo: <strong>$articulo</strong>.</p><br>";
                echo "<table border=1>";
                $campos= mysqli_num_fields($resultadoSQL);//obtiene el numero de campos afectados
                for($i=0;$i<$campos;$i++){
                    $nombrecampo= $resultado->fetch_array(MYSQLI_NUM);
                    echo "<tr>";
                        echo "<th>$nombrecampo[$i]</th>";
                    echo "</tr>";
                }//fin bucle for
                
                $contador=0;
                while($registro=$resultado->fetch_array(MYSQLI_NUM)){
                    if($contador==0){
                        $sumaneto=0;
                        echo "<tr>";
                        echo "<td> ".$registro[0]." </td>";
			echo "<td> ".$registro[1]." </td>";
			echo "<td> ".$registro[2]." </td>";
			echo "<td> ".$registro[3]." </td>";
			echo "<td> ".$registro[4]." </td>";
			echo "<td> ".$registro[5]." </td>";
			echo "<td> ".$registro[6]." </td>";
			echo "</tr>";
			$pales=1;
			$contador=1;
			$indice=$registro[3];
			$sumaneto=$sumaneto+$registro[2];
                    }else{
                        if($indice==$registro[3]){
                            echo "<tr>";
                            echo "<td> ".$registro[0]." </td>";
                            echo "<td> ".$registro[1]." </td>";
                            echo "<td> ".$registro[2]." </td>";
                            echo "<td> ".$registro[3]." </td>";
                            echo "<td> ".$registro[4]." </td>";
                            echo "<td> ".$registro[5]." </td>";
                            echo "<td> ".$registro[6]." </td>";
                            echo "</tr>";
                            $pales++;
                            $sumaneto+=$registro[2];  
                        }else{
                            echo "<tr><td><strong> TOTAL </strong></td><td> </td><td><strong> ".$sumaneto." </strong></td><td><strong> ".$indice."</strong></td>"
                                    . "<td><strong> ".$pales." palés</strong></td><td></td><td></td></tr>";
                            echo "<tr></tr>";
                            $indice=$registro[3];
                            echo "</tr>";
                            echo "<td> ".$registro[0]." </td>";
                            echo "<td> ".$registro[1]." </td>";
                            echo "<td> ".$registro[2]." </td>";
                            echo "<td> ".$registro[3]." </td>";
                            echo "<td> ".$registro[4]." </td>";
                            echo "<td> ".$registro[5]." </td>";
                            echo "<td> ".$registro[6]." </td>";
                            echo "</tr>";
                            $sumaneto=$registro[2];
                            $pales=1;
                        }
                    }//fin else   
                }//fin while
                
                    echo "<td><strong> TOTAL</strong> </td><td> </td><td><strong> ".$sumaneto." </strong></td><td><strong> ".$indice."</strong></td> "
                            . "<td><strong> ".$pales." palets </strong></td><td></td><td></td></tr>";	
                echo "</table><br>";  
                
                //Creo el formulario para crear el pdf
                echo "<form action='losadetallepdf.php' method='post'>";
                    echo "<input name='idlotesalida' type='hidden' value='$idlotesalida'>";
                    echo "<input name='fecha' type='hidden' value='$fecha'>";
                    echo "<input name='comprador' type='hidden' value='$comprador'>";
                    echo "<input name='articulo' type='hidden' value='$articulo'>";
                    echo "<input name='indicador' type='hidden' value='$indicador'>";
                    echo "<input name='enviar' type='submit' id='enviar' value='Enviar a PDF'>";
                echo "</form>";
                
                echo "<br><a href='../../modelo/lotesalida/losaprincipal.php'> Volver al formulario...</a>";
            }//fin else
        ?>
    </body>
</html>