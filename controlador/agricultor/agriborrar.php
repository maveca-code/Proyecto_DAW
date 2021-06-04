<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM agricultor WHERE id = '$idagricultor'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/agricultor/agriprincipal.php");
?>
