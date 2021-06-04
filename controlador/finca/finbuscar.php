<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     
     //Si el paraje o el termino estan vacios vemos la tabla de fincas
     if(empty($paraje) && empty($termino)){
         require_once '../../vista/finca/tablafinca.php';
     }else{
        $consulta="SELECT * FROM finca WHERE"; //consulta de busqueda
        $and=" and ";//se usara en caso de que haga falta añadir mas condiciones a la consulta
        if(!empty($paraje) && !empty($termino)){//si tenemos apodo y la zona se lo añadimos a la consulta
            $consulta.=" Paraje LIKE '%$paraje%'";
            $consulta.=$and. 'Termino LIKE '."%$termino%";
        }else if(!empty($paraje) && empty($termino)){
             $consulta.=" Paraje LIKE '%$paraje%'";
        }else{
            $consulta.=" Termino LIKE '%$termino%'";
        }
     
        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
       
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/finca/finprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>Id</td><td>Paraje</td><td>Ruta</td><td>Termino</td><td>Provincia</td><td>Poligono</td><td>Parcela</td><td>Coordenadas GPS</td><td>Observaciones</td>";
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</dato>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table><br>";
            echo "<br><a href='../../modelo/finca/finprincipal.php'> Volver al formulario...</a>";
        }
     }
?>