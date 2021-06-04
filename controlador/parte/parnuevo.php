<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     include_once '../../controlador/funciones.php';
     
    //Compruebo que los campos con asterisco no esten vacios
    if(empty($parfecha) || empty($incidencia)){
        echo "Los campos con * son imprescindibles.";
        echo "<br><a href='parprincipal.php'> Volver al formulario...</a>";
    }else{//Realizo la consulta si todo va bien muestra mensaje y enlace al formulario
        $parfecha= normal_mysql($parfecha);
        $consulta="INSERT INTO parte (Fecha, Incidencia, Solucion, Observacion, IdLoteEntrada, IdLoteSalida) "
                . "VALUES ('$parfecha', '$incidencia', '$solucion', '$parobs', '$paridloteentrada', '$paridlotesalida')";
        if($conexion -> query($consulta)=== TRUE){
            header('Location:parprincipal.php');
        }else{//Si falla la consulta muestra el codigo de error.
            echo "Error: ". $consulta. "<br>" .mysqli_errno($conexion);
            echo "<br> <a href='parprincipal.php'> Volver al formulario...</a>";
        }
	
    }
    //Cierro la conexion
    $conexion -> close();
?>