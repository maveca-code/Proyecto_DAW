<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     
     //Si el apodo o la zona estan vacios vemos la tabla de agricultores
     if(empty($agriapodo) && empty($agridzona)){
         require_once '../../vista/agricultor/tablaagr.php';
     }else{
        $consulta="SELECT * FROM agricultor WHERE"; //consulta de busqueda
        $and=" and ";//se usara en caso de que haga falta añadir mas condiciones a la consulta
        if(!empty($agriapodo) && !empty($agridzona)){//si tenemos apodo y la zona se lo añadimos a la consulta
            $consulta.=" Apodo LIKE '%$agriapodo%' $and Zona LIKE '%$agridzona%'";
        }else if(!empty($agriapodo) && empty($agridzona)){
             $consulta.=" Apodo LIKE '%$agriapodo%'";
        }else{
            $consulta.=" Zona LIKE '%$agridzona%'";
        }
        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
       
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/agricultor/agriprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>Id</td><td>Nombre</td><td>Apellidos</td><td>Apodo</td><td>Zona</td><td>Direccion</td><td>Localidad</td><td>Provincia</td>"
                    . "<td>Codigo Postal</td><td>NIF</td><td>Observaciones</td>";
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</dato>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table><br>";
            echo "<br><a href='../../modelo/agricultor/agriprincipal.php'> Volver al formulario...</a>";
        }
     }
?>

