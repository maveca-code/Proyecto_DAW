<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM formato WHERE id = '$idformato'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/formato/forprincipal.php");
?>

