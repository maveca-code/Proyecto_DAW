<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     
    //Compruebo que los campos con asterisco no esten vacios
    if(empty($paraje)){
        echo "Los campos con * son imprescindibles.";
        echo "<br><a href='finprincipal.php'> Volver al formulario...</a>";
    }else{//Realizo la consulta si todo va bien muestra mensaje y enlace al formulario
        $consulta="INSERT INTO finca (Paraje, Ruta, Termino, Provincia, Poligono, Parcela, CoordenadasGPS, Observaciones) "
                . "VALUES ('$paraje','$ruta','$termino','$finprovincia','$poligono','$parcela','$gps','$finobs')";
        if($conexion -> query($consulta)=== TRUE){
             header('Location:finprincipal.php');
        }else{//Si falla la consulta muestra el codigo de error.
            echo "Error: ". $consulta. "<br>" .mysqli_errno($conexion);
            echo "<br> <a href='finprincipal.php'> Volver al formulario...</a>";
        }
	
    }
    //Cierro la conexion
    $conexion -> close();
?>
