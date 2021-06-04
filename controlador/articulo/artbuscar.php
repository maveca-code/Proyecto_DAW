<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     
     //Si producto esta vacio vemos la tabla de articulos
     if(empty($producto)){
         require_once '../../vista/articulo/articulotabla.php';
     }else{
        $consulta="SELECT * FROM articulo WHERE Articulo LIKE '%$producto%'"; //consulta de busqueda
        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
       
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/articulo/artprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>Id</td><td>Articulo</td><td>Observaciones</td>";
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</dato>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table><br>";
            echo "<br><a href='../../modelo/articulo/artprincipal.php'> Volver al formulario...</a>";
        }
     }
?>