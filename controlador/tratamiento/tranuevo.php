<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     
    //Compruebo que los campos con asterisco no esten vacios
    if(empty($tratamiento) || empty($trafecha) || empty($traidcuaderno)){
        echo "Los campos con * son imprescindibles.";
        echo "<br><a href='traprincipal.php'> Volver al formulario...</a>";
    }else{//Realizo la consulta si todo va bien muestra mensaje y enlace al formulario
        $consulta="INSERT INTO tratamiento (Id, Fecha, IdCuaderno, Tratamiento, Observaciones) VALUES ('$idtratamiento, $trafecha, $traidcuaderno, $traobs')";
        if($conexion -> query($consulta)=== TRUE){
            header('Location:traprincipal.php');
        }else{//Si falla la consulta muestra el codigo de error.
            echo "Error: ". $consulta. "<br>" .mysqli_errno($conexion);
            echo "<br> <a href='traprincipal.php'> Volver al formulario...</a>";
        }
	
    }
    //Cierro la conexion
    $conexion -> close();
?>

