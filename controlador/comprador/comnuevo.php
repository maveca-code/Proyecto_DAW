<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     
    //Compruebo que los campos con asterisco no esten vacios
    if(empty($empresa)){
        echo "Los campos con * son imprescindibles.";
        echo "<br><a href='comprincipal.php'> Volver al formulario...</a>";
    }else{//Realizo la consulta si todo va bien muestra mensaje y enlace al formulario
        $consulta="INSERT INTO comprador (Empresa, Direccion, Localidad, Provincia, CodigoPostal, NIF, Pais,  Almacen, Observaciones) "
                . "VALUES ('$empresa','$comdir','$comlocalidad', '$comprovincia','$comcodigopostal','$comnif','$compais','$almacen','$comobs')";
        if($conexion -> query($consulta)=== TRUE){
            header('Location:comprincipal.php');
        }else{//Si falla la consulta muestra el codigo de error.
            echo "Error: ". $consulta. "<br>" .mysqli_errno($conexion);
            echo "<br> <a href='comprincipal.php'> Volver al formulario...</a>";
        }
	
    }
    //Cierro la conexion
    $conexion -> close();
?>
