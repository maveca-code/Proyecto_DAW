<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    //Si la fecha y la incidencia estan vacios vemos la tabla 
    if(empty($parfecha) && empty($incidencia)){
        require_once '../../vista/parte/partabla.php';
    }else{
        $consulta="SELECT * FROM parte WHERE "; //consulta de busqueda
        $and=" and ";//se usara en caso de que haga falta añadir mas condiciones a la consulta
        if(!empty($parfecha) && !empty($incidencia)){//si tenemos envase y peso se lo añadimos a la consulta
            $consulta.=" fecha = '$parfecha' $and incidencia LIKE '%$incidencia%'";
        }else if(empty($parfecha) && !empty($incidencia)){
             $consulta.=" incidencia LIKE '%$incidencia%'";
        }else{
            $consulta.=" fecha = '$parfecha'";
        }
        
        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
       
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/parte/parprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>Id</td><td>Fecha</td><td>Incidencia</td><td>Solución</td><td>Observaciones</td><td>IdLoteEntrada</td><td>IdLoteSalida</td>";
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</dato>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table><br>";
            echo "<br><a href='../../modelo/parte/parprincipal.php'> Volver al formulario...</a>";
        }
    }//fin else
?>