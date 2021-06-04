<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    //Si el envase y el peso estan vacios vemos la tabla 
    if(empty($linea)){
        require_once '../../vista/linea/lintabla.php';
    }else{
        $consulta="SELECT * FROM linea WHERE linea LIKE '%$linea%'";
        
        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
       
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/linea/linprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>Id</td><td>Linea</td><td>Observaciones</td>";
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</dato>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table><br>";
            echo "<br><a href='../../modelo/linea/linprincipal.php'> Volver al formulario...</a>";
        }
    }
?>

