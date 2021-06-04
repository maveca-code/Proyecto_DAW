<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM parte WHERE id = '$idparte'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/parte/parprincipal.php");
?>
