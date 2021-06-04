<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     
    //Compruebo que los campos con asterisco no esten vacios
    if(empty($envase)){
        echo "Los campos con * son imprescindibles.";
        echo "<br><a href='forprincipal.php'> Volver al formulario...</a>";
    }else{//Realizo la consulta si todo va bien muestra mensaje y enlace al formulario
        $consulta="INSERT INTO formato (Envase, Peso, Observaciones) VALUES ('$envase', '$peso', '$forobs')";
        if($conexion -> query($consulta)=== TRUE){
            header('Location:forprincipal.php');
        }else{//Si falla la consulta muestra el codigo de error.
            echo "Error: ". $consulta. "<br>" .mysqli_errno($conexion);
            echo "<br> <a href='forprincipal.php'> Volver al formulario...</a>";
        }
	
    }
    //Cierro la conexion
    $conexion -> close();
?>
