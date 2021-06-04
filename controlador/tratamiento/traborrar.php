<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM tratamiento WHERE id = '$idtratamiento'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/tratamiento/traprincipal.php");
?>