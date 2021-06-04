<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include '../../controlador/funciones.php';
    
    if(empty($losafecha) || empty($losaidcompradores) || empty($losaidarticulo)){
        echo 'Los campos con * son imprescindibles.';
        echo "<br><a href='../../modelo/lotesalida/losaprincipal.php'>Volver al formulario...</a>";
    }else{
        $losafecha= normal_mysql($losafecha);
        if(empty($completado)){
            $completado=0;
            $horacompletado="00.00:00";
        }
        if(empty($cargado)){
            $cargado=0;
        }
        if($completado==1){
            $horacompletado=date("H:i:s");
        }
        
        $consulta="UPDATE lotesalida SET fecha=$losafecha, idcomprador=$losaidcompradores, idarticulo=$losaidarticulo, completado=$completado, "
                . "cargado=$cargado, observaciones=$losaobs WHERE id=$idlotesalida";
        
        //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/lotesalida/losaprincipal.php");

    }//fin else
?>

