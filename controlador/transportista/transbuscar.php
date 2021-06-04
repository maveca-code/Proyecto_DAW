<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($empresa)){
        require_once '../../vista/transportista/transtabla.php';
    }else{
        $consulta="SELECT * FROM transportista WHERE empresa LIKE '%$empresa%' ORDER BY id ASC"; //consulta de busqueda
         
        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
       
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/transportista/transprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>Id</td><td>Empresa</td><td>Observaciones</td>";
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</dato>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table><br>";
            echo "<br><a href='../../modelo/transportista/transprincipal.php'> Volver al formulario...</a>";
        }
    }
?>
