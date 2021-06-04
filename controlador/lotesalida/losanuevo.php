<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include '../../controlador/funciones.php';
    
    //Compruebo que los campos con asterisco no esten vacios
    if(empty($losafecha) && empty($losaidcompradores) && empty($losaidarticulo) && empty($transportista)){
        echo "Los campos con * son imprescindibles.";
        if($transportista==""){
            echo '<br>Para transportista desconocido seleccionar "Propio"';
            echo "<br><a href='../../modelo/lotesalida/losaprincipal.php'> Volver al formulario...</a>";
        }
    }else{
        if($completado==""){
            $completado=0;
        }
        
        if($cargado==""){
            $cargado=0;
        }
        
        $horacompletado="00:00:00";
        
        if($completado==1){
            $horacompletado=date("H:i:s");
        }
        
        $losafecha= normal_mysql($losafecha);
        
        //Realizo la consulta si todo va bien muestra mensaje y enlace al formulario
        $consulta="INSERT INTO lotesalida(Fecha, IdComprador, IdArticulo, Completado, HoraCompletado, Transportista, Cargado, Observaciones) VALUES "
                . "('$losafecha', '$losaidcompradores', '$losaidarticulo', '$completado','$horacompletado', '$transportista', '$cargado', '$losaobs')";
        
        $resultado=$conexion -> query($consulta);
        echo 'Los datos se han introducido correctamente.';
        echo '<br><a href="losaprincipal.php">Volver al formulario</a>';
        echo '<br><a href="../pale/palprincipal.php">Ir a pale</a>';
        
    }//fin else
?>

