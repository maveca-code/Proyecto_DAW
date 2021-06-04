<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($idtransportista)){
        echo "Indique el Id y los campos a modificar.";
        echo "<br><a href='../../modelo/transportista/transprincipal.php'>Volver al formulario...</a>";
    }else{
        if(!empty($empresa) && !empty($observaciones)){
            $consulta="UPDATE transportista SET Empresa='$empresa', Observaciones='$observaciones' WHERE id='$idtransportista'";
        }else if(!empty ($empresa) && empty ($observaciones)){
            $consulta="UPDATE transportista SET Empresa='$empresa' WHERE id='$idtransportista'";  
        }else{
            $consulta="UPDATE transportista SET Observaciones='$observaciones' WHERE id='$idtransportista'";
        }
        
        //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/transportista/transprincipal.php");
    }
?>

