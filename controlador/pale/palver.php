<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include_once '../../controlador/funciones.php';
     
    $consulta="SELECT p.id, losa.fecha, CONCAT(c.empresa,' ===> ',a.articulo) AS Lotesalida, p.bruto, p.tara,  p.bruto -p.tara AS Neto, "
            . "p.bultos, p.piezas, f.envase, li.linea, p.observaciones, p.fecha FROM pale p JOIN formato f ON p.idformato=f.id JOIN "
            . "lotesalida losa ON p.lotesalida=losa.id JOIN comprador c ON losa.idcomprador=c.id JOIN articulo a ON losa.idarticulo=a.id "
            . "JOIN linea li ON li.id=p.idlinea ORDER BY losa.fecha DESC, Lotesalida";
    $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
    
   /* echo "El contenido de la base de datos es el siguiente:<br>";
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
    echo "<br><a href='palprincipal.php'> Volver al formulario...</a>";*/
?>

