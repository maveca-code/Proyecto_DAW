<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     
    //Compruebo que los campos con asterisco no esten vacios
    if(empty($usuario) || empty($nivel) || empty($pass)){
        echo "Los campos con * son imprescindibles.";
        echo "<br><a href='usuprincipal.php'> Volver al formulario...</a>";
    }else{//Realizo la consulta si todo va bien muestra mensaje y enlace al formulario
        $consulta="INSERT INTO usuarios (Usuario,Password,Nivel,NombreCompleto,Observaciones) VALUES ('$usuario','$pass','$nivel','$nombrecompleto','$usuobser')";
        if($conexion -> query($consulta)=== TRUE){
            header('Location:usuprincipal.php');
        }else{//Si falla la consulta muestra el codigo de error.
            echo "Error: ". $consulta. "<br>" .mysqli_errno($conexion);
            echo "<br> <a href='usuprincipal.php'> Volver al formulario...</a>";
        }
	
    }
    //Cierro la conexion
    $conexion -> close();
?>

