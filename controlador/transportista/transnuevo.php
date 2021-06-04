<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($empresa)){
        echo "Los campos con * son imprescindibles.";
        echo "<br><a href='transprincipal.php'> Volver al formulario...</a>";
    }else{
        $consulta="INSERT INTO transportista (Empresa, Observaciones) VALUES ('$empresa', '$observaciones')";
        
        if($conexion -> query($consulta)=== TRUE){
            header('Location:transprincipal.php');
        }else{//Si falla la consulta muestra el codigo de error.
            echo "Error: ". $consulta. "<br>" .mysqli_errno($conexion);
            echo "<br> <a href='transprincipal.php'> Volver al formulario...</a>";
        }
    }
?>

