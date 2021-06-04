<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    //Si el envase y el peso estan vacios vemos la tabla 
    if(empty($envase) && empty($peso)){
        require_once '../../vista/formato/fortabla.php';
    }else{
        $consulta="SELECT * FROM formato WHERE "; //consulta de busqueda
        $and=" and ";//se usara en caso de que haga falta añadir mas condiciones a la consulta
        if(!empty($envase) && !empty($peso)){//si tenemos envase y peso se lo añadimos a la consulta
            $consulta.=" envase LIKE '%$envase%'";
            $consulta.=$and. 'peso LIKE '."%$peso%'";
        }else if(empty($envase) && !empty($peso)){
             $consulta.=" peso LIKE '%$peso%'";
        }else{
            $consulta.=" envase LIKE '%$envase%'";
        }
        
        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
       
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/formato/forprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>Id</td><td>Envase</td><td>Peso</td><td>Observaciones</td>";
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</dato>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table><br>";
            echo "<br><a href='../../modelo/formato/forprincipal.php'> Volver al formulario...</a>";
        }
    }//fin else
?>

