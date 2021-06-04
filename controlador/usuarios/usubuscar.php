<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     
     //Si el usuario o el nivel estan vacios vemos la tabla de usuarios
     if(empty($usuario) && empty($nivel)){
         require_once '../../vista/usuarios/tablausu.php';
     }else{
        $consulta="SELECT * FROM usuarios WHERE"; //consulta de busqueda
        $and=" and ";//se usara en caso de que haga falta añadir mas condiciones a la consulta
        if(!empty($usuario) && !empty($nivel)){//si tenemos usuario  y nivel se lo añadimos a la consulta
            $consulta.=" Usuario LIKE '%$usuario%' $and Nivel LIKE '%$nivel%'";
        }else if(!empty($usuario) && empty($nivel)){
             $consulta.=" Usuario LIKE '%$usuario%'";
        }else{
            $consulta.=" Nivel LIKE '%$nivel%'";
        }
        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
       
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/usuarios/usuprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>Id</td><td>Nombre</td><td>Contraseña</td><td>Nivel</td><td>Nombre Completo</td><td>Observaciones</td>";
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</dato>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table><br>";
            echo "<br><a href='../../modelo/usuarios/usuprincipal.php'> Volver al formulario...</a>";
        }
     }
?>

