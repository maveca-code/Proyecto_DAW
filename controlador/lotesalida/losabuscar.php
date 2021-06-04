<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include_once '../../controlador/funciones.php';
    
    if(empty($losafecha) && empty($losaidcompradores) && empty($losaidarticulo) && empty($transportista)){
        require_once '../../vista/lotesalida/losatabla.php';
    }else{
        $consulta="SELECT l.id AS Id, l.fecha AS Fecha, c.empresa AS Comprador, a.articulo AS Articulo, l.completado, "
                . "l.Horacompletado, l.Observaciones AS Obs, tra.empresa AS Transporte, l.cargado FROM lotesalida l JOIN comprador c "
                . "ON c.id=l.idcomprador JOIN articulo a ON a.id=l.idarticulo JOIN transportista tra ON l.transportista=tra.empresa WHERE ";
        $and='AND';
        $losafecha= normal_mysql($losafecha);
        
        $consulta.="fecha='$losafecha' $and idcomprador='$losaidcompradores' $and idarticulo='$losaidarticulo' $and transportista = '$transportista' ORDER BY "
                . "completado, fecha DESC, comprador, articulo, transportista";  
        $resultado=$conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
        
        //Obtengo el numero de campos afectados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/lotesalida/losaprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "<br>Los registros seleccionados son los siguientes:<br>";
            
            echo "<form action='../../modelo/lotesalida/losaprincipal.php method='post'>";
                echo "<table border=1>"
                    . "<tr><td>Id</td><td>Fecha</td><td>Id Comprador</td><td>Id Articulo</td><td>Completado</td>"
                    . "<td>Hora Completado</td><td>Transportista</td><td>Cargado</td><td>Observaciones</td><td>Palets pesados</td>";
                while($registro=$resultado->fetch_array(MYSQLI_NUM)){
                    //En caso de una sola coincidencia señalo el registro directamente
                    echo "<tr><td><input name='idsalida' type='radio' value=$registro[0]";
                        if($fila==1){
                            echo "checked></td>";
                        }else{
                            echo "></td>";
                        }
                        //Muestro los campos de la tabla lote salida    
                        echo "<td>$registro[0]</td>";
                        $hora= mysql_normal($registro[1]);
                        echo "<td>$hora</td>";  
                        echo "<td>$registro[2]</td>";  
                        echo "<td>$registro[3]</td>"; 
                        if($registro[4]==1){
                            echo "<td>Si</td>";
                            echo "<td>$registro[5]</td>"; 
                        }else{
                            echo"<td>No</td>";
                            echo "<td></td>"; 
                        }
                        echo "<td>$registro[6]</td>"; 
                        if($registro[7]==1){
                            echo "<td>Si</td>";
                        }else{
                            echo "<td>No</td>";
                        }
                        echo "<td>$registro[8]</td>";
                    
                        $ordenSQL="SELECT * FROM pale WHERE lotesalida='$registro[0]]'";
                        $resultado=$conexion -> query($ordenSQL);//guardamos el resultado de la consulta
                        $pales= mysqli_fetch_assoc($resultado);
                    
                        echo "<td>$pales palés</td>";
                    echo "</tr>";
                }//fin while
                
                    echo "<tr><td colspan=9 align='center'>Editar<input type='radio' name='losaaccion' value='4' checked>"
                . "Borrar<input type='radio' name='losaaccion' value='5'></td></tr>";
                    echo "<tr><td colspan=9 align='center'><input name='enviar' type='submit' id='enviar' value='Enviar'></td></tr>";
                echo "</table></form>";
                echo "<a href='../../modelo/lotesalida/losaprincipal.php'> Volver al formulario...</a>";
        }//fin else obtener numero registros

    }//fin else
?>
