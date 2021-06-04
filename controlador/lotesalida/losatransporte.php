<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include '../../controlador/funciones.php';
    
    echo "<p>TRANSPORTES PENDIENTES</p>";
    
    $consulta="SELECT losa.id AS Id, losa.fecha AS Fecha, tra.empresa AS Transporte, c.empresa AS Comprador, a.articulo AS Articulo, "
            . "losa.completado AS Completado, losa.horacompletado AS Hora_completado, losa.observaciones AS Observaciones, losa.Cargado  FROM "
            . "lotesalida losa JOIN comprador c ON losa.idcomprador=c.id JOIN articulo a ON losa.idarticulo=a.id JOIN transportista tra "
            . "ON losa.transportista=tra.id WHERE losa.cargado='0' ORDER BY fecha DESC, transporte, comprador";
    
    $resultado=$conexion -> query($consulta);//guardamos el resultado de la consulta
    echo "<p>El contenido de la base de datos es el siguiente:";
    echo "<table border=1>";
    $campos=$resultado->fetch_assoc();
            echo "<tr>";
        foreach ($campos as $campo=>$nombrecampo){
            echo"<th>$campo</th>";  
        }//fin foreach
            echo "<th>Palés pesados</th></tr>";
            
            while ($registro=$resultado->fetch_array(MYSQLI_NUM)){
		echo "<tr>";                
	
		foreach ($registro as $campo => $valor){
			if ($campo=='1'){
                                $valor=mysql_normal($valor);
			}
			if ($campo=='5'){
                            if ($valor==1){
                                $valor="Si";
                            }else{
                                $valor="No";
                            }
			}
                        
			if ($campo=='8'){
                            if ($valor==1){
                                $valor="Si";
                            }else{
				$valor="No";
                            }
			}
			echo "<td>$valor</td>";
                }//fin foreach
            
                $consulta="SELECT * FROM pale WHERE lotesalida=$registro[0]";
                $resultado=$conexion -> query($consulta);//guardamos el resultado de la consulta
                $pales=$resultado->num_rows;
                echo "<td>$pales palés</td>";
                echo "</tr>";
              
            }///fin while
        echo "</table>";      
        echo '<a href="../../modelo/lotesalida/losaprincipal.php">Volver al formulario</a>';
            
?>

