<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($palidlotesalida)){
        require_once '../../vista/pale/paltabla.php';
    }else{
        $consulta="SELECT p.id, losa.fecha, CONCAT(c.empresa,' ===> ',a.articulo) AS Lotesalida, p.bruto, p.tara,  p.bruto -p.tara AS Neto, "
                . "p.bultos, p.piezas, f.envase, li.linea, p.observaciones, p.Fecha FROM pale p JOIN formato f ON p.idformato=f.id JOIN "
                . "lotesalida losa ON p.lotesalida=losa.id JOIN comprador c ON losa.idcomprador=c.id JOIN articulo a ON losa.idarticulo=a.id "
                . "JOIN linea li ON li.id=p.idlinea WHERE p.lotesalida = '$palidlotesalida' ORDER BY p.id DESC";

        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        
        $filas= mysqli_fetch_assoc($resultado);
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/pale/palprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>ID</td><td>Fecha salida</td><td>Lote Salida</td><td>Bruto</td><td>Tara</td><td>Neto</td><td>Bultos</td><td>Piezas</td>"
                . "<td>Envase</td><td>Linea</td><td>Observaciones</td><td>Fecha pale</td></tr>";
                while($filas){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</td>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table>";
            echo "<br><a href='../../modelo/pale/palprincipal.php'> Volver al formulario...</a>";
        }
    }//fin else
?>

