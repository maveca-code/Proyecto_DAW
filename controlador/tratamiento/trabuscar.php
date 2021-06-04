<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     
     //Si el tratamiento, el cuaderno y la fecha estan vacios vemos la tabla 
     if(empty($tratamiento) && empty($traidcuaderno) && empty($trafecha)){
         require_once '../../vista/tratamiento/tratamientotabla.php';
     }else{
        $consulta="SELECT Id, Fecha, IdCuaderno, Tratamiento, Observaciones FROM tratamiento WHERE "; //consulta de busqueda
        $and=" and ";//se usara en caso de que haga falta añadir mas condiciones a la consulta
        if(!empty($tratamiento) && !empty($traidcuaderno) && !empty($trafecha)){//si tenemos tratamiento, el cuaderno y la fecha se lo añadimos a la consulta
            $consulta.=" tratamiento LIKE '%$tratamiento%' $and IdCuaderno='$traidcuaderno' $and Fecha='$trafecha'";
        }else if(!empty($tratamiento) && !empty($traidcuaderno) && empty($trafecha)){
            $consulta.=" tratamiento LIKE '%$tratamiento%' $and IdCuaderno='$traidcuaderno'";
        }else if(!empty($tratamiento) && empty($traidcuaderno) && !empty($trafecha)){
            $consulta.=" tratamiento LIKE '%$tratamiento%'  $and Fecha='$trafecha'";
        }else if(empty($tratamiento) && !empty($traidcuaderno) && !empty($trafecha)){
            $consulta.=" IdCuaderno = '$traidcuaderno' $and Fecha='$trafecha'";
        }else if(empty($tratamiento) && empty($traidcuaderno) && !empty($trafecha)){
            $consulta.="Fecha = '$trafecha'";
        }else if(empty($tratamiento) && !empty($traidcuaderno) && empty($trafecha)){
            $consulta.=" IdCuaderno = '$traidcuaderno'";
        }else{
            $consulta.=" tratamiento LIKE '%$tratamiento%'";
        }
        
        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
       
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/tratamiento/traprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>Id</td><td>Fecha</td><td>IdCuaderno</td><td>Tratamiento</td><td>Observaciones</td>";
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</dato>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table><br>";
            echo "<br><a href='../../modelo/tratamiento/traprincipal.php'> Volver al formulario...</a>";
        }
     }
?>