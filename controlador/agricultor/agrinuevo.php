<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     
    //Compruebo que los campos con asterisco no esten vacios
    if(empty($agriapodo) || empty($agridzona)){
        echo "Los campos con * son imprescindibles.";
        echo "<br><a href='agriprincipal.php'> Volver al formulario...</a>";
    }else{//Realizo la consulta si todo va bien muestra mensaje y enlace al formulario
        $consulta="INSERT INTO agricultor (Nombre, Apellidos, Apodo, Zona, Direccion, Localidad, Provincia, CodigoPostal, NIF, Observaciones) "
                . "VALUES ('$agrinom','$agriape','$agriapodo','$agridzona','$agridir','$agrilocalidad', '$agriprovincia','$agricodigopostal','$agrinif','$agriobs')";
        if($conexion -> query($consulta)=== TRUE){
            header('Location:agriprincipal.php');
        }else{//Si falla la consulta muestra el codigo de error.
            echo "Error: ". $consulta. "<br>" .mysqli_errno($conexion);
            echo "<br> <a href='agriprincipal.php'> Volver al formulario...</a>";
        }
	
    }
    //Cierro la conexion
    $conexion -> close();
?>

