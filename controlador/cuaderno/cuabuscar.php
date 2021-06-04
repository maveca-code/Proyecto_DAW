<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     
     //Si el id de la finca o el de agricultor esta vacio vemos la tabla 
     if(empty($cuaidfinca) && empty($cuaidagricultores)){
         require_once '../../vista/cuaderno/tablacuaderno.php';
     }else{
        $consulta="SELECT c.id AS Idcuaderno, f.paraje AS Finca, a.apodo AS Agricultor, c.observaciones AS Obs FROM "
                . "cuaderno c JOIN finca f ON f.id=c.idfinca JOIN agricultor a ON a.id=c.idagricultor WHERE"; //consulta de busqueda
        $and=" and ";//se usara en caso de que haga falta añadir mas condiciones a la consulta
        if(!empty($cuaidfinca) && !empty($cuaidagricultores)){//si tenemos el id de finca y agricultor se lo añadimos a la consulta
            $consulta.=" Idfinca = '$cuaidfinca' $and Idagricultor='$cuaidagricultores'";
        }else if(!empty($cuaidfinca) && empty($cuaidagricultores)){
             $consulta.=" Idfinca = '$cuaidfinca'";
        }else{
            $consulta.=" Idagricultor = '$cuaidagricultores'";
        }
        
        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
       
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/cuaderno/cuaprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>Id</td><td>IdFinca</td><td>IdAgricultor</td><td>Observaciones</td>";
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</dato>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table><br>";
            echo "<br><a href='../../modelo/cuaderno/cuaprincipal.php'> Volver al formulario...</a>";
        }
     }
?>